import React, { useState } from 'react';

const TrackingSettings = () => {
    const [settings, setSettings] = useState({
        updateInterval: 30,
        speedLimit: 100,
        geofenceRadius: 1000,
        notifications: true,
        emailAlerts: true,
        smsAlerts: true,
    });

    const handleInputChange = (e) => {
        const { name, value, type, checked } = e.target;
        const newValue = type === 'checkbox' ? checked : value;
        setSettings((prev) => ({
            ...prev,
            [name]: newValue,
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            await fetch('/api/settings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(settings),
            });
            alert('Settings saved successfully!');
        } catch (error) {
            console.error('Error saving settings:', error);
            alert('Failed to save settings. Please try again.');
        }
    };

    return (
        <div className="p-6">
            <h2 className="text-2xl font-bold text-gray-900 mb-6">Tracking Settings</h2>
            <form onSubmit={handleSubmit} className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {/* Update Interval */}
                    <div>
                        <label htmlFor="updateInterval" className="block text-sm font-medium text-gray-700 mb-2">
                            Update Interval (seconds)
                        </label>
                        <input
                            type="number"
                            id="updateInterval"
                            name="updateInterval"
                            value={settings.updateInterval}
                            onChange={handleInputChange}
                            min="15"
                            max="300"
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                        />
                        <p className="mt-1 text-sm text-gray-500">
                            How often the vehicle position should be updated
                        </p>
                    </div>

                    {/* Speed Limit */}
                    <div>
                        <label htmlFor="speedLimit" className="block text-sm font-medium text-gray-700 mb-2">
                            Speed Limit (km/h)
                        </label>
                        <input
                            type="number"
                            id="speedLimit"
                            name="speedLimit"
                            value={settings.speedLimit}
                            onChange={handleInputChange}
                            min="0"
                            max="200"
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                        />
                        <p className="mt-1 text-sm text-gray-500">
                            Maximum allowed speed before triggering alerts
                        </p>
                    </div>

                    {/* Geofence Radius */}
                    <div>
                        <label htmlFor="geofenceRadius" className="block text-sm font-medium text-gray-700 mb-2">
                            Geofence Radius (meters)
                        </label>
                        <input
                            type="number"
                            id="geofenceRadius"
                            name="geofenceRadius"
                            value={settings.geofenceRadius}
                            onChange={handleInputChange}
                            min="100"
                            max="10000"
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                        />
                        <p className="mt-1 text-sm text-gray-500">
                            Radius around authorized areas
                        </p>
                    </div>

                    {/* Notifications */}
                    <div>
                        <label className="block text-sm font-medium text-gray-700 mb-2">
                            Notifications
                        </label>
                        <div className="space-y-2">
                            <div className="flex items-center">
                                <input
                                    id="notifications"
                                    name="notifications"
                                    type="checkbox"
                                    checked={settings.notifications}
                                    onChange={handleInputChange}
                                    className="h-4 w-4 text-royal-blue focus:ring-royal-blue"
                                />
                                <label htmlFor="notifications" className="ml-2 block text-sm text-gray-900">
                                    Enable notifications
                                </label>
                            </div>
                            <div className="flex items-center">
                                <input
                                    id="emailAlerts"
                                    name="emailAlerts"
                                    type="checkbox"
                                    checked={settings.emailAlerts}
                                    onChange={handleInputChange}
                                    className="h-4 w-4 text-royal-blue focus:ring-royal-blue"
                                />
                                <label htmlFor="emailAlerts" className="ml-2 block text-sm text-gray-900">
                                    Email alerts
                                </label>
                            </div>
                            <div className="flex items-center">
                                <input
                                    id="smsAlerts"
                                    name="smsAlerts"
                                    type="checkbox"
                                    checked={settings.smsAlerts}
                                    onChange={handleInputChange}
                                    className="h-4 w-4 text-royal-blue focus:ring-royal-blue"
                                />
                                <label htmlFor="smsAlerts" className="ml-2 block text-sm text-gray-900">
                                    SMS alerts
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="pt-4">
                    <button
                        type="submit"
                        className="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                    >
                        Save Settings
                    </button>
                </div>
            </form>
        </div>
    );
};

export default TrackingSettings;
