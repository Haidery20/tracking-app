import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';

const TrackingAlerts = () => {
    const [alerts, setAlerts] = useState([]);
    const [selectedAlert, setSelectedAlert] = useState(null);
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        // Fetch alerts every 30 seconds
        const interval = setInterval(fetchAlerts, 30000);
        return () => clearInterval(interval);
    }, []);

    const fetchAlerts = async () => {
        setLoading(true);
        try {
            const response = await fetch('/api/vehicles/alerts');
            const data = await response.json();
            setAlerts(data);
        } catch (error) {
            console.error('Error fetching alerts:', error);
        } finally {
            setLoading(false);
        }
    };

    const handleAlertClick = (alert) => {
        setSelectedAlert(alert);
    };

    const containerVariants = {
        hidden: { opacity: 0 },
        visible: { opacity: 1 },
    };

    return (
        <div className="p-6">
            <div className="flex justify-between items-center mb-6">
                <h2 className="text-2xl font-bold text-gray-900">Alerts</h2>
                <button
                    onClick={fetchAlerts}
                    className="px-4 py-2 bg-royal-blue text-white rounded-md hover:bg-royal-blue-dark transition-colors duration-200"
                >
                    Refresh
                </button>
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
                    <div className="bg-white rounded-lg shadow-md">
                        <div className="p-4">
                            <div className="space-y-4">
                                {alerts.map((alert) => (
                                    <div
                                        key={alert.id}
                                        onClick={() => handleAlertClick(alert)}
                                        className={`p-4 rounded-lg cursor-pointer transition-colors duration-200 ${
                                            selectedAlert?.id === alert.id
                                                ? 'bg-royal-blue text-white'
                                                : 'hover:bg-gray-50'
                                        }`}
                                    >
                                        <div className="flex justify-between items-start">
                                            <div>
                                                <h3 className="font-semibold">{alert.vehicle_name}</h3>
                                                <p className="text-sm text-gray-600">
                                                    {alert.plate_number}
                                                </p>
                                                <p className="mt-2 text-sm">
                                                    {alert.message}
                                                </p>
                                            </div>
                                            <div className="flex flex-col items-end">
                                                <span className={`px-2 py-1 rounded-full text-xs ${
                                                    alert.type === 'warning'
                                                        ? 'bg-yellow-100 text-yellow-800'
                                                        : 'bg-red-100 text-red-800'
                                                }`}>
                                                    {alert.type}
                                                </span>
                                                <span className="text-sm text-gray-500 mt-2">
                                                    {new Date(alert.timestamp).toLocaleString()}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                </motion.div>
            )}
        </div>
    );
};

export default TrackingAlerts;
