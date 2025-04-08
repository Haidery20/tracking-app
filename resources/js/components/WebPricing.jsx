import React from 'react';
import { motion } from 'framer-motion';

const WebPricing = () => {
    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    const pricingPlans = [
        {
            title: 'Starter',
            price: '$9.99',
            features: [
                '1 Website',
                '500MB Storage',
                '10GB Bandwidth',
                '1 Email Account',
                'Basic Support',
                'Free SSL Certificate',
                'Unlimited SMS',
                'Basic Templates',
            ],
            buttonText: 'Get Started',
            buttonLink: '#contact',
        },
        {
            title: 'Professional',
            price: '$19.99',
            features: [
                '5 Websites',
                '2GB Storage',
                '50GB Bandwidth',
                '5 Email Accounts',
                'Priority Support',
                'Free SSL Certificate',
                'Unlimited SMS',
                'Advanced Templates',
                'Custom Domain',
            ],
            buttonText: 'Choose Plan',
            buttonLink: '#contact',
        },
        {
            title: 'Enterprise',
            price: '$49.99',
            features: [
                'Unlimited Websites',
                '10GB Storage',
                '200GB Bandwidth',
                'Unlimited Email',
                '24/7 Support',
                'Free SSL Certificate',
                'Unlimited SMS',
                'Premium Templates',
                'Custom Domain',
                'Advanced Analytics',
            ],
            buttonText: 'Contact Us',
            buttonLink: '#contact',
        },
    ];

    return (
        <div className="py-12 bg-gray-50">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Choose the perfect plan for your business
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Start growing your online presence today with our flexible hosting plans.
                    </p>
                </div>

                <div className="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    {pricingPlans.map((plan, index) => (
                        <motion.div
                            key={plan.title}
                            initial="hidden"
                            whileInView="visible"
                            viewport={{ once: true }}
                            variants={containerVariants}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className={`bg-white p-6 rounded-lg shadow ${
                                index === 1 ? 'border-2 border-royal-blue' : ''
                            }`}
                        >
                            <div className="text-center">
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">
                                    {plan.title}
                                </h3>
                                <div className="text-4xl font-bold text-gray-900">
                                    {plan.price}<span className="text-base font-normal text-gray-500">/month</span>
                                </div>
                            </div>

                            <div className="mt-6">
                                <ul className="space-y-4 text-gray-600">
                                    {plan.features.map((feature, featureIndex) => (
                                        <li key={featureIndex} className="flex items-center">
                                            <i className="fas fa-check text-royal-blue mr-2"></i>
                                            {feature}
                                        </li>
                                    ))}
                                </ul>
                            </div>

                            <div className="mt-8 text-center">
                                <a
                                    href={plan.buttonLink}
                                    className={`inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md transition-colors duration-300 ${
                                        index === 1
                                            ? 'bg-royal-blue text-white hover:bg-royal-blue-dark'
                                            : 'bg-gray-100 text-royal-blue hover:bg-gray-200'
                                    }`}
                                >
                                    {plan.buttonText}
                                </a>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default WebPricing;
