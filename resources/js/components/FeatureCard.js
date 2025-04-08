import React from 'react';
import { motion } from 'framer-motion';

const FeatureCard = ({ icon, title, description }) => {
    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    return (
        <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true }}
            variants={containerVariants}
            transition={{ duration: 0.5 }}
            className="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300"
        >
            <div className="text-center">
                <div className="w-12 h-12 rounded-full bg-royal-blue text-white flex items-center justify-center mb-4">
                    <i className={`fas ${icon} text-xl`} />
                </div>
                <h3 className="text-xl font-semibold text-gray-900 mb-2">{title}</h3>
                <p className="text-gray-600">
                    {description}
                </p>
            </div>
        </motion.div>
    );
};

export default FeatureCard;
