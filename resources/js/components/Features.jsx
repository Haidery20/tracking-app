import React from 'react';
import { motion } from 'framer-motion';

const features = [
    {
        name: 'Web Design & Development',
        description: 'Create stunning, responsive websites that captivate your audience and drive business growth.',
        detailedDescription: 'Our expert team delivers modern, user-friendly websites tailored to your brand. From sleek portfolios to robust e-commerce solutions, we bring your digital vision to life with cutting-edge design and development practices.',
        benefits: [
            'Custom responsive design',
            'SEO-optimized structure',
            'Fast loading performance',
            'Mobile-first approach',
            'User experience focused'
        ],
        icon: (
            <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        ),
        image: '/images/web-design.png'
    },
    {
        name: 'Web Hosting Solutions',
        description: 'Reliable, secure, and high-performance hosting services for your online presence.',
        detailedDescription: 'Experience lightning-fast website performance with our premium hosting solutions. We provide secure, scalable, and managed hosting services with 99.9% uptime guarantee and 24/7 technical support.',
        benefits: [
            '99.9% uptime guarantee',
            '24/7 technical support',
            'SSL security included',
            'Daily backups',
            'Scalable resources'
        ],
        icon: (
            <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
            </svg>
        ),
        image: '/images/hosting.png'
    },
    {
        name: 'SMS Bulk Services',
        description: 'Reach your audience instantly with our powerful bulk SMS messaging platform.',
        detailedDescription: 'Connect with your customers through our reliable bulk SMS service. Send personalized messages, run marketing campaigns, and manage customer communications efficiently with our user-friendly platform.',
        benefits: [
            'High delivery rates',
            'Real-time delivery reports',
            'Scheduled messaging',
            'Contact management',
            'API integration'
        ],
        icon: (
            <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
        ),
        image: '/images/sms-bulk.png'
    }
];

const Features = () => {
    return (
        <div className="py-24 bg-gray-50" id="features">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <motion.h2 
                        initial={{ opacity: 0, y: 20 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.8 }}
                        className="text-3xl font-extrabold text-gray-900 sm:text-4xl"
                    >
                        Comprehensive Digital Solutions
                    </motion.h2>
                    <motion.p 
                        initial={{ opacity: 0, y: 20 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.8, delay: 0.2 }}
                        className="mt-4 max-w-2xl mx-auto text-xl text-gray-500"
                    >
                        Everything you need to establish and grow your online presence.
                    </motion.p>
                </div>

                <div className="mt-20">
                    <div className="space-y-24">
                        {features.map((feature, index) => (
                            <motion.div
                                key={feature.name}
                                initial={{ opacity: 0, y: 20 }}
                                animate={{ opacity: 1, y: 0 }}
                                transition={{ duration: 0.8, delay: index * 0.2 }}
                                className="relative"
                            >
                                <div className="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">
                                    <div className={`lg:col-span-1 ${index % 2 === 0 ? 'lg:order-1' : 'lg:order-2'}`}>
                                        <div className="relative h-full">
                                            <img
                                                className="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5"
                                                src={feature.image}
                                                alt={feature.name}
                                            />
                                            <div className="absolute inset-0 rounded-lg ring-1 ring-inset ring-black ring-opacity-10"></div>
                                        </div>
                                    </div>
                                    <div className={`lg:col-span-1 ${index % 2 === 0 ? 'lg:order-2' : 'lg:order-1'}`}>
                                        <div className="h-full flex flex-col justify-center">
                                            <div className="flex items-center">
                                                <div className="flex-shrink-0 bg-primary rounded-md p-3 text-white">
                                                    {feature.icon}
                                                </div>
                                                <h3 className="ml-4 text-2xl font-bold text-gray-900">{feature.name}</h3>
                                            </div>
                                            <p className="mt-4 text-lg text-gray-500">{feature.description}</p>
                                            <p className="mt-4 text-gray-600">{feature.detailedDescription}</p>
                                            
                                            <div className="mt-6">
                                                <h4 className="text-lg font-semibold text-gray-900">Key Benefits:</h4>
                                                <ul className="mt-4 space-y-3">
                                                    {feature.benefits.map((benefit) => (
                                                        <li key={benefit} className="flex items-start">
                                                            <svg className="h-6 w-6 flex-shrink-0 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                                            </svg>
                                                            <span className="ml-3 text-gray-600">{benefit}</span>
                                                        </li>
                                                    ))}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </motion.div>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Features; 