import React from 'react';
import { motion } from 'framer-motion';

const Testimonial = ({ quote, author, position, image }) => {
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
            className="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300"
        >
            <div className="relative mb-6">
                <div className="absolute -left-3 -top-3 w-12 h-12 bg-royal-blue rounded-full flex items-center justify-center">
                    <i className="fas fa-quote-left text-white" />
                </div>
                <p className="text-gray-600 italic leading-relaxed">
                    {quote}
                </p>
            </div>
            <div className="flex items-center space-x-4">
                <img
                    src={image}
                    alt={author}
                    className="w-12 h-12 rounded-full"
                />
                <div>
                    <h3 className="font-semibold text-gray-900">{author}</h3>
                    <p className="text-sm text-gray-600">{position}</p>
                </div>
            </div>
        </motion.div>
    );
};

export default Testimonial;
