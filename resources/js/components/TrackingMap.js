import React, { useEffect } from 'react';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

const TrackingMap = ({ center, vehicles }) => {
    useEffect(() => {
        // Initialize the map
        const map = L.map('map').setView(center, 13);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19,
        }).addTo(map);

        // Create a marker icon
        const markerIcon = L.icon({
            iconUrl: '/images/marker-icon.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
        });

        // Add markers for each vehicle
        vehicles.forEach((vehicle) => {
            const marker = L.marker([vehicle.latitude, vehicle.longitude], {
                icon: markerIcon,
            }).addTo(map);

            marker.bindPopup(
                `<div class="p-4">
                    <h3 class="font-semibold">${vehicle.name}</h3>
                    <p class="text-sm">Plate: ${vehicle.plate_number}</p>
                    <p class="text-sm">Speed: ${vehicle.speed} km/h</p>
                    <p class="text-sm">Status: <span class="font-medium ${
                        vehicle.status === 'active' ? 'text-green-500' : 'text-red-500'
                    }">${vehicle.status}</span></p>
                </div>`
            );
        });

        // Clean up the map when component unmounts
        return () => {
            map.remove();
        };
    }, [center, vehicles]);

    return <div id="map" className="h-full w-full" />;
};

export default TrackingMap;
