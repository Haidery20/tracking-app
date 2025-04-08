import React, { useState } from 'react';
import Chart from 'chart.js/auto';
import { motion } from 'framer-motion';

const TrackingAnalytics = () => {
    const [timeRange, setTimeRange] = useState('7');
    const [loading, setLoading] = useState(false);
    const [analytics, setAnalytics] = useState({
        distance: [],
        speed: [],
        alerts: [],
    });

    const fetchAnalytics = async () => {
        setLoading(true);
        try {
            const response = await fetch(`/api/analytics?days=${timeRange}`);
            const data = await response.json();
            setAnalytics(data);
            updateCharts(data);
        } catch (error) {
            console.error('Error fetching analytics:', error);
        } finally {
            setLoading(false);
        }
    };

    const updateCharts = (data) => {
        // Distance Chart
        const distanceCtx = document.getElementById('distanceChart');
        if (distanceCtx) {
            new Chart(distanceCtx, {
                type: 'line',
                data: {
                    labels: data.distance.map(d => d.date),
                    datasets: [{
                        label: 'Distance Traveled (km)',
                        data: data.distance.map(d => d.distance),
                        borderColor: '#2563eb',
                        tension: 0.1,
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        }

        // Speed Chart
        const speedCtx = document.getElementById('speedChart');
        if (speedCtx) {
            new Chart(speedCtx, {
                type: 'line',
                data: {
                    labels: data.speed.map(s => s.date),
                    datasets: [{
                        label: 'Average Speed (km/h)',
                        data: data.speed.map(s => s.speed),
                        borderColor: '#2563eb',
                        tension: 0.1,
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        }

        // Alerts Chart
        const alertsCtx = document.getElementById('alertsChart');
        if (alertsCtx) {
            new Chart(alertsCtx, {
                type: 'bar',
                data: {
                    labels: data.alerts.map(a => a.date),
                    datasets: [{
                        label: 'Alerts',
                        data: data.alerts.map(a => a.count),
                        backgroundColor: '#2563eb',
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        }
    };

    const containerVariants = {
        hidden: { opacity: 0 },
        visible: { opacity: 1 },
    };

    return (
        <div className="p-6">
            <h2 className="text-2xl font-bold text-gray-900 mb-6">Tracking Analytics</h2>

            <div className="flex justify-between items-center mb-6">
                <div className="flex items-center space-x-4">
                    <span className="text-gray-600">Time Range:</span>
                    <select
                        value={timeRange}
                        onChange={(e) => setTimeRange(e.target.value)}
                        className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-32 sm:text-sm border-gray-300 rounded-md"
                    >
                        <option value="7">7 Days</option>
                        <option value="30">30 Days</option>
                        <option value="90">90 Days</option>
                    </select>
                </div>
                <button
                    onClick={fetchAnalytics}
                    disabled={loading}
                    className="px-4 py-2 bg-royal-blue text-white rounded-md hover:bg-royal-blue-dark transition-colors duration-200 disabled:opacity-50"
                >
                    {loading ? (
                        <div className="animate-spin rounded-full h-6 w-6 border-b-2 border-white"></div>
                    ) : (
                        'Refresh Data'
                    )}
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
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {/* Distance Chart */}
                        <div className="bg-white rounded-lg shadow-md p-6">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4">
                                Distance Traveled
                            </h3>
                            <canvas id="distanceChart" className="h-64"></canvas>
                        </div>

                        {/* Speed Chart */}
                        <div className="bg-white rounded-lg shadow-md p-6">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4">
                                Average Speed
                            </h3>
                            <canvas id="speedChart" className="h-64"></canvas>
                        </div>

                        {/* Alerts Chart */}
                        <div className="bg-white rounded-lg shadow-md p-6">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4">
                                Alert History
                            </h3>
                            <canvas id="alertsChart" className="h-64"></canvas>
                        </div>
                    </div>
                </motion.div>
            )}
        </div>
    );
};

export default TrackingAnalytics;
