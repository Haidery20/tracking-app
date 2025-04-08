import React, { useState, useEffect } from 'react';

const TrackingNotifications = () => {
    const [notifications, setNotifications] = useState([]);
    const [loading, setLoading] = useState(false);
    const [readAll, setReadAll] = useState(false);

    useEffect(() => {
        // Fetch notifications every 30 seconds
        const interval = setInterval(fetchNotifications, 30000);
        return () => clearInterval(interval);
    }, []);

    const fetchNotifications = async () => {
        setLoading(true);
        try {
            const response = await fetch('/api/notifications');
            const data = await response.json();
            setNotifications(data);
        } catch (error) {
            console.error('Error fetching notifications:', error);
        } finally {
            setLoading(false);
        }
    };

    const markAsRead = async (id) => {
        try {
            await fetch(`/api/notifications/${id}/read`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            });
            fetchNotifications();
        } catch (error) {
            console.error('Error marking notification as read:', error);
        }
    };

    const markAllAsRead = async () => {
        try {
            await fetch('/api/notifications/read-all', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            });
            setReadAll(true);
            fetchNotifications();
        } catch (error) {
            console.error('Error marking all notifications as read:', error);
        }
    };

    return (
        <div className="p-6">
            <h2 className="text-2xl font-bold text-gray-900 mb-6">Notifications</h2>

            <div className="flex justify-between items-center mb-6">
                <button
                    onClick={markAllAsRead}
                    className="px-4 py-2 bg-royal-blue text-white rounded-md hover:bg-royal-blue-dark transition-colors duration-200"
                    disabled={readAll || loading}
                >
                    Mark All as Read
                </button>
            </div>

            {loading ? (
                <div className="flex justify-center items-center h-64">
                    <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-royal-blue"></div>
                </div>
            ) : (
                <div className="bg-white rounded-lg shadow-md">
                    <div className="p-4">
                        {notifications.length === 0 ? (
                            <div className="text-center py-8 text-gray-500">
                                No notifications available
                            </div>
                        ) : (
                            <div className="space-y-4">
                                {notifications.map((notification) => (
                                    <div
                                        key={notification.id}
                                        className={`p-4 rounded-lg transition-colors duration-200 ${
                                            notification.read
                                                ? 'bg-gray-50'
                                                : 'bg-white hover:bg-gray-50'
                                        }`}
                                    >
                                        <div className="flex justify-between items-start">
                                            <div>
                                                <h3 className="font-medium">
                                                    {notification.title}
                                                </h3>
                                                <p className="text-sm text-gray-600 mt-1">
                                                    {notification.message}
                                                </p>
                                            </div>
                                            <div className="flex flex-col items-end">
                                                <span className={`px-2 py-1 rounded-full text-xs ${
                                                    notification.type === 'warning'
                                                        ? 'bg-yellow-100 text-yellow-800'
                                                        : 'bg-red-100 text-red-800'
                                                }`}>
                                                    {notification.type}
                                                </span>
                                                <span className="text-sm text-gray-500 mt-2">
                                                    {new Date(notification.timestamp).toLocaleString()}
                                                </span>
                                            </div>
                                        </div>
                                        {!notification.read && (
                                            <button
                                                onClick={() => markAsRead(notification.id)}
                                                className="mt-2 px-4 py-1 text-sm text-royal-blue hover:text-royal-blue-dark"
                                            >
                                                Mark as Read
                                            </button>
                                        )}
                                    </div>
                                ))}
                            </div>
                        )}
                    </div>
                </div>
            )}
        </div>
    );
};

export default TrackingNotifications;
