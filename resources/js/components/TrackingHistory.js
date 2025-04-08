import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';

const TrackingHistory = () => {
    const [history, setHistory] = useState([]);
    const [selectedDate, setSelectedDate] = useState(new Date());
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        fetchHistory();
    }, [selectedDate]);

    const fetchHistory = async () => {
        setLoading(true);
        try {
            const response = await fetch(`/api/vehicles/history?date=${selectedDate.toISOString().split('T')[0]}`);
            const data = await response.json();
            setHistory(data);
        } catch (error) {
            console.error('Error fetching history:', error);
        } finally {
            setLoading(false);
        }
    };

    const containerVariants = {
        hidden: { opacity: 0 },
        visible: { opacity: 1 },
    };

    return (
        <div className="p-6">
            <div className="flex justify-between items-center mb-6">
                <h2 className="text-2xl font-bold text-gray-900">Tracking History</h2>
                <div className="relative">
                    <input
                        type="date"
                        value={selectedDate.toISOString().split('T')[0]}
                        onChange={(e) => setSelectedDate(new Date(e.target.value))}
                        className="px-4 py-2 border border-gray-300 rounded-md"
                    />
                </div>
            </div>

            {loading ? (
                <div className="flex justify-center items-center h-64">
                    <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-royal-blue"></div>
                </div>
            ) : (
                <motion.div
                    initial="hidden"
                    animate="visible"
                    variants={containerVariants}
                >
                    <div className="bg-white rounded-lg shadow-md overflow-hidden">
                        <table className="min-w-full divide-y divide-gray-200">
                            <thead className="bg-gray-50">
                                <tr>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Vehicle
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Plate Number
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Speed
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody className="bg-white divide-y divide-gray-200">
                                {history.map((record) => (
                                    <tr key={record.id}>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            {record.vehicle_name}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            {record.plate_number}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            {record.latitude}, {record.longitude}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            {record.speed} km/h
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            <span className={`px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${
                                                record.status === 'active'
                                                    ? 'bg-green-100 text-green-800'
                                                    : 'bg-red-100 text-red-800'
                                            }`}>
                                                {record.status}
                                            </span>
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            {new Date(record.timestamp).toLocaleTimeString()}
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </motion.div>
            )}
        </div>
    );
};

export default TrackingHistory;
