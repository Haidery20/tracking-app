import React from 'react';
import { motion } from 'framer-motion';

const WebTestimonials = () => {
    const testimonials = [
        {
            quote: "Their web hosting service has been incredibly reliable. The support team is always quick to respond and help resolve any issues.",
            author: "Sarah Johnson",
            position: "Marketing Director",
            company: "Tech Solutions",
            image: "https://via.placeholder.com/150",
        },
        {
            quote: "The web design team created a stunning website that perfectly represents our brand. It's fast, responsive, and has helped increase our conversions.",
            author: "Michael Chen",
            position: "CEO",
            company: "Digital Agency",
            image: "https://via.placeholder.com/150",
        },
        {
            quote: "The bulk SMS service has revolutionized our customer communication. The delivery rate is excellent, and the reporting features are invaluable.",
            author: "Lisa Martinez",
            position: "Operations Manager",
            company: "Retail Chain",
            image: "https://via.placeholder.com/150",
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
                        What Our Clients Say
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Don't just take our word for it. Here's what our satisfied clients have to say.
                    </p>
                </div>

                <div className="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    {testimonials.map((testimonial, index) => (
                        <motion.div
                            key={index}
                            initial="hidden"
                            whileInView="visible"
                            viewport={{ once: true }}
                            variants={containerVariants}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className="bg-gray-50 p-6 rounded-lg"
                        >
                            <div className="relative mb-6">
                                <div className="absolute -left-3 -top-3 w-12 h-12 bg-royal-blue rounded-full flex items-center justify-center">
                                    <i className="fas fa-quote-left text-white" />
                                </div>
                                <p className="text-gray-600 italic leading-relaxed">
                                    {testimonial.quote}
                                </p>
                            </div>
                            <div className="flex items-center space-x-4">
                                <img
                                    src={testimonial.image}
                                    alt={testimonial.author}
                                    className="w-12 h-12 rounded-full"
                                />
                                <div>
                                    <h3 className="font-semibold text-gray-900">{testimonial.author}</h3>
                                    <p className="text-sm text-gray-600">
                                        {testimonial.position} at {testimonial.company}
                                    </p>
                                </div>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default WebTestimonials;
