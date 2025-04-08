import React, { useState, useEffect } from 'react';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

const TrackingGeofence = () => {
    const [geofences, setGeofences] = useState([]);
    const [newGeofence, setNewGeofence] = useState({
        name: '',
        radius: 1000,
        latitude: 0,
        longitude: 0,
        active: true,
    });
    const [editingGeofence, setEditingGeofence] = useState(null);
    const [map, setMap] = useState(null);

    useEffect(() => {
        initializeMap();
        fetchGeofences();
    }, []);

    const initializeMap = () => {
        const map = L.map('geofenceMap').setView([0, 0], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19,
        }).addTo(map);
        setMap(map);
    };

    const fetchGeofences = async () => {
        try {
            const response = await fetch('/api/geofences');
            const data = await response.json();
            setGeofences(data);
            updateMapGeofences(data);
        } catch (error) {
            console.error('Error fetching geofences:', error);
        }
    };

    const updateMapGeofences = (geofences) => {
        if (!map) return;

        // Clear existing geofences
        const existingLayers = map._layers;
        Object.keys(existingLayers).forEach((key) => {
            if (existingLayers[key] instanceof L.Circle) {
                map.removeLayer(existingLayers[key]);
            }
        });

        // Add new geofences
        geofences.forEach((geofence) => {
            const circle = L.circle([geofence.latitude, geofence.longitude], {
                color: geofence.active ? '#2563eb' : '#dc2626',
                fillColor: geofence.active ? '#2563eb' : '#dc2626',
                fillOpacity: 0.1,
                radius: geofence.radius,
            }).addTo(map);

            circle.bindPopup(
                `<div class="p-4">
                    <h3 class="font-semibold">${geofence.name}</h3>
                    <p class="text-sm">Radius: ${geofence.radius} meters</p>
                    <p class="text-sm">Status: <span class="font-medium ${
                        geofence.active ? 'text-green-500' : 'text-red-500'
                    }">${geofence.active ? 'Active' : 'Inactive'}</span></p>
                </div>`
            );
        });
    };

    const handleCreateGeofence = async () => {
        try {
            const response = await fetch('/api/geofences', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(newGeofence),
            });
            if (response.ok) {
                setNewGeofence({
                    name: '',
                    radius: 1000,
                    latitude: 0,
                    longitude: 0,
                    active: true,
                });
                fetchGeofences();
            }
        } catch (error) {
            console.error('Error creating geofence:', error);
        }
    };

    const handleUpdateGeofence = async (geofence) => {
        try {
            const response = await fetch(`/api/geofences/${geofence.id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(geofence),
            });
            if (response.ok) {
                setEditingGeofence(null);
                fetchGeofences();
            }
        } catch (error) {
            console.error('Error updating geofence:', error);
        }
    };

    const handleDeleteGeofence = async (id) => {
        if (!window.confirm('Are you sure you want to delete this geofence?')) {
            return;
        }

        try {
            const response = await fetch(`/api/geofences/${id}`, {
                method: 'DELETE',
            });
            if (response.ok) {
                fetchGeofences();
            }
        } catch (error) {
            console.error('Error deleting geofence:', error);
        }
    };

    return (
        <div className="p-6">
            <h2 className="text-2xl font-bold text-gray-900 mb-6">Geofence Management</h2>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {/* Map Container */}
                <div className="bg-white rounded-lg shadow-md">
                    <div id="geofenceMap" className="h-96"></div>
                </div>

                {/* Geofence List */}
                <div className="bg-white rounded-lg shadow-md p-6">
                    <div className="mb-6">
                        <h3 className="text-lg font-semibold text-gray-900 mb-4">
                            Create New Geofence
                        </h3>
                        <form onSubmit={(e) => {
                            e.preventDefault();
                            handleCreateGeofence();
                        }} className="space-y-4">
                            <div>
                                <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-2">
                                    Name
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value={newGeofence.name}
                                    onChange={(e) => setNewGeofence({
                                        ...newGeofence,
                                        name: e.target.value,
                                    })}
                                    className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                />
                            </div>
                            <div>
                                <label htmlFor="radius" className="block text-sm font-medium text-gray-700 mb-2">
                                    Radius (meters)
                                </label>
                                <input
                                    type="number"
                                    id="radius"
                                    name="radius"
                                    value={newGeofence.radius}
                                    onChange={(e) => setNewGeofence({
                                        ...newGeofence,
                                        radius: parseInt(e.target.value),
                                    })}
                                    className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                />
                            </div>
                            <button
                                type="submit"
                                className="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                            >
                                Create Geofence
                            </button>
                        </form>
                    </div>

                    <div>
                        <h3 className="text-lg font-semibold text-gray-900 mb-4">
                            Existing Geofences
                        </h3>
                        <div className="space-y-4">
                            {geofences.map((geofence) => (
                                <div
                                    key={geofence.id}
                                    className="p-4 rounded-lg border border-gray-200"
                                >
                                    <div className="flex justify-between items-start">
                                        <div>
                                            <h4 className="font-medium">
                                                {geofence.name}
                                            </h4>
                                            <p className="text-sm text-gray-600">
                                                Radius: {geofence.radius} meters
                                            </p>
                                            <p className="text-sm text-gray-600">
                                                Status: <span className={`font-medium ${
                                                    geofence.active ? 'text-green-500' : 'text-red-500'
                                                }`}>
                                                    {geofence.active ? 'Active' : 'Inactive'}
                                                </span>
                                            </p>
                                        </div>
                                        <div className="flex space-x-2">
                                            <button
                                                onClick={() => setEditingGeofence(geofence)}
                                                className="px-3 py-1 text-sm text-royal-blue hover:text-royal-blue-dark"
                                            >
                                                Edit
                                            </button>
                                            <button
                                                onClick={() => handleDeleteGeofence(geofence.id)}
                                                className="px-3 py-1 text-sm text-red-500 hover:text-red-600"
                                            >
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>

            {/* Edit Geofence Modal */}
            {editingGeofence && (
                <div className="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
                    <div className="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                        <div className="mt-3 text-center">
                            <h3 className="text-lg font-medium leading-6 text-gray-900">
                                Edit Geofence
                            </h3>
                            <div className="mt-2 px-4 py-3">
                                <form
                                    onSubmit={(e) => {
                                        e.preventDefault();
                                        handleUpdateGeofence(editingGeofence);
                                    }}
                                    className="space-y-4"
                                >
                                    <div>
                                        <label htmlFor="editName" className="block text-sm font-medium text-gray-700 mb-2">
                                            Name
                                        </label>
                                        <input
                                            type="text"
                                            id="editName"
                                            name="name"
                                            value={editingGeofence.name}
                                            onChange={(e) => setEditingGeofence({
                                                ...editingGeofence,
                                                name: e.target.value,
                                            })}
                                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>
                                    <div>
                                        <label htmlFor="editRadius" className="block text-sm font-medium text-gray-700 mb-2">
                                            Radius (meters)
                                        </label>
                                        <input
                                            type="number"
                                            id="editRadius"
                                            name="radius"
                                            value={editingGeofence.radius}
                                            onChange={(e) => setEditingGeofence({
                                                ...editingGeofence,
                                                radius: parseInt(e.target.value),
                                            })}
                                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>
                                    <div className="flex items-center">
                                        <input
                                            id="editActive"
                                            name="active"
                                            type="checkbox"
                                            checked={editingGeofence.active}
                                            onChange={(e) => setEditingGeofence({
                                                ...editingGeofence,
                                                active: e.target.checked,
                                            })}
                                            className="h-4 w-4 text-royal-blue focus:ring-royal-blue"
                                        />
                                        <label htmlFor="editActive" className="ml-2 block text-sm text-gray-900">
                                            Active
                                        </label>
                                    </div>
                                    <div className="mt-4 flex justify-end space-x-3">
                                        <button
                                            type="button"
                                            onClick={() => setEditingGeofence(null)}
                                            className="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50"
                                        >
                                            Cancel
                                        </button>
                                        <button
                                            type="submit"
                                            className="px-4 py-2 text-sm font-medium text-white bg-royal-blue hover:bg-royal-blue-dark rounded-md"
                                        >
                                            Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            )}
        </div>
    );
};

export default TrackingGeofence;
