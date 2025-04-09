import React from 'react';
import { motion } from 'framer-motion';

const HowItWorks = () => {
    const steps = [
        {
            title: 'Install the Tracker',
            description: 'Easily install our compact GPS tracker on your vehicle or asset. Our trackers are designed for quick and simple installation.',
            icon: 'fas fa-tools',
        },
        {
            title: 'Connect to Dashboard',
            description: 'Access your tracking dashboard from any device. Monitor your assets in real-time with our intuitive interface.',
            icon: 'fas fa-desktop',
        },
        {
            title: 'Set Up Alerts',
            description: 'Configure custom alerts for geofencing, speed limits, and other important events. Stay informed about your assets 24/7.',
            icon: 'fas fa-bell',
        },
        {
            title: 'Analyze & Optimize',
            description: 'Use our detailed analytics to optimize routes, reduce fuel costs, and improve operational efficiency.',
            icon: 'fas fa-chart-line',
        },
    ];

    return (
        <div className="bg-gray-50 py-24">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        How It Works
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Get started with KONEKTA in four simple steps
                    </p>
                </div>

                <div className="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    {steps.map((step, index) => (
                        <motion.div
                            key={step.title}
                            initial={{ opacity: 0, y: 20 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            viewport={{ once: true }}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className="bg-white rounded-lg shadow-lg p-6"
                        >
                            <div className="flex items-center">
                                <div className="flex-shrink-0">
                                    <div className="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                        <i className={`${step.icon} text-xl`} />
                                    </div>
                                </div>
                                <div className="ml-4">
                                    <h3 className="text-lg font-medium text-gray-900">{step.title}</h3>
                                </div>
                            </div>
                            <p className="mt-4 text-gray-600">{step.description}</p>
                        </motion.div>
                    ))}
                </div>

                {/* Video Demo Section */}
                <div className="mt-16">
                    <div className="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div className="aspect-w-16 aspect-h-9">
                            <div className="w-full h-96 bg-gray-200 flex items-center justify-center">
                                <div className="text-center">
                                    <i className="fas fa-play-circle text-6xl text-primary"></i>
                                    <p className="mt-4 text-gray-600">Watch our product demo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default HowItWorks; 