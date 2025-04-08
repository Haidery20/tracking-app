import React from 'react';
import { motion } from 'framer-motion';

const WebFeatures = () => {
    const features = [
        {
            icon: 'fas fa-shield-alt',
            title: 'Enterprise Security',
            description: 'Advanced security measures to protect your data and applications.',
            features: [
                'SSL Certificates',
                'DDoS Protection',
                'Regular Backups',
                'Security Audits',
            ],
        },
        {
            icon: 'fas fa-bolt',
            title: 'High Performance',
            description: 'Lightning-fast servers with SSD storage for optimal performance.',
            features: [
                'SSD Storage',
                'CDN Integration',
                'Caching System',
                'Optimized Servers',
            ],
        },
        {
            icon: 'fas fa-tools',
            title: 'Easy Management',
            description: 'User-friendly control panel with powerful management tools.',
            features: [
                'One-Click Installers',
                'File Manager',
                'Database Management',
                'Email Control',
            ],
        },
        {
            icon: 'fas fa-headset',
            title: '24/7 Support',
            description: 'Dedicated support team available around the clock.',
            features: [
                'Live Chat',
                'Email Support',
                'Phone Support',
                'Knowledge Base',
            ],
        },
    ];

    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    return (
        <div className="py-12 bg-gray-50">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Why Choose Us
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Discover the advantages of our comprehensive web solutions.
                    </p>
                </div>

                <div className="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    {features.map((feature, index) => (
                        <motion.div
                            key={feature.title}
                            initial="hidden"
                            whileInView="visible"
                            viewport={{ once: true }}
                            variants={containerVariants}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className="bg-white p-6 rounded-lg shadow"
                        >
                            <div className="text-center">
                                <div className="w-12 h-12 rounded-full bg-royal-blue text-white flex items-center justify-center mb-4">
                                    <i className={`${feature.icon} text-xl`} />
                                </div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">
                                    {feature.title}
                                </h3>
                                <p className="text-gray-600 mb-4">
                                    {feature.description}
                                </p>
                            </div>

                            <div className="space-y-2">
                                {feature.features.map((feat, featIndex) => (
                                    <div key={featIndex} className="flex items-center">
                                        <i className="fas fa-check text-royal-blue mr-2"></i>
                                        {feat}
                                    </div>
                                ))}
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default WebFeatures;
