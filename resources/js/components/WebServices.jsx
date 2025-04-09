import React from 'react';
import { motion } from 'framer-motion';

const WebServices = () => {
    const services = [
        {
            icon: 'fas fa-server',
            title: 'Web Hosting',
            description: 'High-performance hosting with 99.9% uptime guarantee. Perfect for small to enterprise websites.',
            features: [
                'SSD Storage',
                'Free SSL Certificates',
                '24/7 Support',
                'Unlimited Bandwidth',
                'One-Click WordPress',
            ],
        },
        {
            icon: 'fas fa-paint-brush',
            title: 'Web Design',
            description: 'Professional web design services that convert visitors into customers.',
            features: [
                'Custom Design',
                'Responsive Layout',
                'SEO Optimized',
                'Fast Loading',
                'Modern UI/UX',
            ],
        },
        {
            icon: 'fas fa-sms',
            title: 'Bulk SMS',
            description: 'Send thousands of SMS messages instantly with our reliable SMS gateway.',
            features: [
                'High Delivery Rate',
                'API Integration',
                'Custom Templates',
                'Real-time Reports',
                '24/7 Support',
            ],
        },
    ];

    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    return (
        <div className="py-12 bg-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Our Services
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        We provide comprehensive solutions for your online presence and communication needs.
                    </p>
                </div>

                <div className="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    {services.map((service, index) => (
                        <motion.div
                            key={service.title}
                            initial="hidden"
                            whileInView="visible"
                            viewport={{ once: true }}
                            variants={containerVariants}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className="bg-gray-50 p-6 rounded-lg"
                        >
                            <div className="text-center">
                                <div className="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center mb-4">
                                    <i className={`${service.icon} text-xl`} />
                                </div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">
                                    {service.title}
                                </h3>
                                <p className="text-gray-600 mb-4">
                                    {service.description}
                                </p>
                            </div>

                            <div className="space-y-2">
                                {service.features.map((feature, featureIndex) => (
                                    <div key={featureIndex} className="flex items-center">
                                        <i className="fas fa-check text-primary mr-2"></i>
                                        {feature}
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

export default WebServices;
