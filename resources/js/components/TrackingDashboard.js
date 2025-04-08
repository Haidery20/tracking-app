import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';

const TrackingDashboard = () => {
    const [vehicles, setVehicles] = useState([]);
    const [selectedVehicle, setSelectedVehicle] = useState(null);
    const [mapCenter, setMapCenter] = useState({ lat: 0, lng: 0 });

    useEffect(() => {
        // Fetch vehicle data from API
        const fetchVehicles = async () => {
            try {
                const response = await fetch('/api/vehicles');
                const data = await response.json();
                setVehicles(data);
                
                // Set map center to the first vehicle's location
                if (data.length > 0) {
                    setMapCenter({
                        lat: data[0].latitude,
                        lng: data[0].longitude
                    });
                }
            } catch (error) {
                console.error('Error fetching vehicles:', error);
            }
        };

        fetchVehicles();

        // Update vehicle data every 30 seconds
        const interval = setInterval(fetchVehicles, 30000);
        return () => clearInterval(interval);
    }, []);

    const handleVehicleSelect = (vehicle) => {
        setSelectedVehicle(vehicle);
        setMapCenter({
            lat: vehicle.latitude,
            lng: vehicle.longitude
        });
    };

    const containerVariants = {
        hidden: { opacity: 0 },
        visible: { opacity: 1 },
    };

    return (
        <div className="flex h-screen">
            {/* Sidebar */}
            <motion.div
                initial="hidden"
                animate="visible"
                variants={containerVariants}
                className="w-1/4 bg-gray-800 text-white p-6 overflow-y-auto"
            >
                <h2 className="text-2xl font-bold mb-6">Vehicle Tracking</h2>
                <div className="space-y-4">
                    {vehicles.map((vehicle) => (
                        <button
                            key={vehicle.id}
                            onClick={() => handleVehicleSelect(vehicle)}
                            className={`p-4 rounded-lg transition-colors duration-200 ${
                                selectedVehicle?.id === vehicle.id
                                    ? 'bg-royal-blue text-white'
                                    : 'hover:bg-gray-700'
                            }`}
                        >
                            <div className="flex justify-between items-center">
                                <div>
                                    <h3 className="font-semibold">{vehicle.name}</h3>
                                    <p className="text-sm text-gray-400">
                                        {vehicle.plate_number}
                                    </p>
                                </div>
                                <div className="flex items-center space-x-2">
                                    <span className={`px-2 py-1 rounded-full text-xs ${
                                        vehicle.status === 'active'
                                            ? 'bg-green-500 text-white'
                                            : 'bg-red-500 text-white'
                                    }`}>
                                        {vehicle.status}
                                    </span>
                                    <span className="text-sm text-gray-400">
                                        {vehicle.speed} km/h
                                    </span>
                                </div>
                            </div>
                        </button>
                    ))}
                </div>
            </motion.div>

            {/* Map Container */}
            <div className="w-3/4 flex flex-col">
                <div className="h-1/4 bg-gray-100 p-6">
                    <h2 className="text-xl font-semibold mb-4">Vehicle Details</h2>
                    {selectedVehicle ? (
                        <div className="space-y-4">
                            <div className="flex justify-between items-center">
                                <span className="font-medium">Location:</span>
                                <span>
                                    {selectedVehicle.latitude}, {selectedVehicle.longitude}
                                </span>
                            </div>
                            <div className="flex justify-between items-center">
                                <span className="font-medium">Speed:</span>
                                <span>{selectedVehicle.speed} km/h</span>
                            </div>
                            <div className="flex justify-between items-center">
                                <span className="font-medium">Status:</span>
                                <span className={`px-2 py-1 rounded-full text-xs ${
                                    selectedVehicle.status === 'active'
                                        ? 'bg-green-500 text-white'
                                        : 'bg-red-500 text-white'
                                }`}>
                                    {selectedVehicle.status}
                                </span>
                            </div>
                        </div>
                    ) : (
                        <p className="text-gray-500">Select a vehicle to view details</p>
                    )}
                </div>

                <div className="flex-1">
                    <div
                        id="map"
                        className="w-full h-full"
                        style={{
                            position: 'relative',
                            minHeight: '400px',
                            background: '#f0f0f0',
                        }}
                    />
                </div>
            </div>
        </div>
    );
};

export default TrackingDashboard;
