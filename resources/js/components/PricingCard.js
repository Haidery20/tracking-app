import React, { useState } from 'react';
import { motion } from 'framer-motion';

const PricingCard = ({ plan, price, features, buttonText, buttonLink }) => {
    const [isHovered, setIsHovered] = useState(false);

    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    const featureVariants = {
        hidden: { opacity: 0, x: -20 },
        visible: { opacity: 1, x: 0 },
    };

    return (
        <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true }}
            variants={containerVariants}
            transition={{ duration: 0.5 }}
            className="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300"
            onMouseEnter={() => setIsHovered(true)}
            onMouseLeave={() => setIsHovered(false)}
        >
            <div className="text-center mb-6">
                <h3 className="text-xl font-semibold text-gray-900 mb-2">{plan}</h3>
                <div className="text-4xl font-bold text-gray-900">
                    ${price}<span className="text-base font-normal text-gray-500">/month</span>
                </div>
            </div>

            <motion.ul
                className="space-y-4 text-gray-600"
                initial="hidden"
                whileInView="visible"
                viewport={{ once: true }}
                variants={{
                    hidden: { opacity: 0 },
                    visible: { opacity: 1 }
                }}
                transition={{ duration: 0.5, delay: 0.2 }}
            >
                {features.map((feature, index) => (
                    <motion.li
                        key={index}
                        variants={featureVariants}
                        transition={{ delay: index * 0.1 }}
                        className="flex items-center"
                    >
                        <i className="fas fa-check text-royal-blue mr-2"></i>
                        {feature}
                    </motion.li>
                ))}
            </motion.ul>

            <div className="mt-8 text-center">
                <motion.a
                    href={buttonLink}
                    className={`inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md transition-colors duration-300 ${
                        isHovered ? 'text-white bg-royal-blue' : 'text-royal-blue bg-gray-100'
                    }`}
                    whileHover={{ scale: 1.05 }}
                    whileTap={{ scale: 0.95 }}
                >
                    {buttonText}
                </motion.a>
            </div>
        </motion.div>
    );
};

export default PricingCard;
