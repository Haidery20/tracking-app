import React from 'react';
import { motion } from 'framer-motion';

const TeamMember = ({ name, role, image, socialLinks }) => {
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
            <div className="relative w-full h-48 mb-6">
                <img
                    src={image}
                    alt={name}
                    className="w-full h-full object-cover rounded-lg"
                />
                <div className="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                    <div className="flex space-x-4">
                        {socialLinks.map((link, index) => (
                            <a
                                key={index}
                                href={link.url}
                                className="text-white hover:text-royal-blue transition-colors duration-200"
                            >
                                <i className={`fab ${link.icon} text-xl`} />
                            </a>
                        ))}
                    </div>
                </div>
            </div>
            <div className="text-center">
                <h3 className="text-xl font-semibold text-gray-900 mb-1">{name}</h3>
                <p className="text-gray-600 text-sm">{role}</p>
            </div>
        </motion.div>
    );
};

export default TeamMember;
