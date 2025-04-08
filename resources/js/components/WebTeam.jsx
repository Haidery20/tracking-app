import React from 'react';
import { motion } from 'framer-motion';

const WebTeam = () => {
    const teamMembers = [
        {
            name: "John Smith",
            role: "CEO & Founder",
            image: "https://via.placeholder.com/200",
            socialLinks: [
                { icon: 'fab fa-linkedin-in', url: '#' },
                { icon: 'fab fa-twitter', url: '#' },
                { icon: 'fab fa-github', url: '#' },
            ],
        },
        {
            name: "Emily Johnson",
            role: "CTO",
            image: "https://via.placeholder.com/200",
            socialLinks: [
                { icon: 'fab fa-linkedin-in', url: '#' },
                { icon: 'fab fa-twitter', url: '#' },
                { icon: 'fab fa-github', url: '#' },
            ],
        },
        {
            name: "Michael Chen",
            role: "Head of Design",
            image: "https://via.placeholder.com/200",
            socialLinks: [
                { icon: 'fab fa-linkedin-in', url: '#' },
                { icon: 'fab fa-behance', url: '#' },
                { icon: 'fab fa-dribbble', url: '#' },
            ],
        },
        {
            name: "Sarah Martinez",
            role: "Operations Manager",
            image: "https://via.placeholder.com/200",
            socialLinks: [
                { icon: 'fab fa-linkedin-in', url: '#' },
                { icon: 'fab fa-twitter', url: '#' },
                { icon: 'fab fa-instagram', url: '#' },
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
                        Meet Our Team
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Passionate professionals dedicated to your success.
                    </p>
                </div>

                <div className="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    {teamMembers.map((member, index) => (
                        <motion.div
                            key={member.name}
                            initial="hidden"
                            whileInView="visible"
                            viewport={{ once: true }}
                            variants={containerVariants}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            className="bg-gray-50 p-6 rounded-lg"
                        >
                            <div className="relative w-full h-48 mb-6">
                                <img
                                    src={member.image}
                                    alt={member.name}
                                    className="w-full h-full object-cover rounded-lg"
                                />
                                <div className="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                                    <div className="flex space-x-4">
                                        {member.socialLinks.map((link, linkIndex) => (
                                            <a
                                                key={linkIndex}
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
                                <h3 className="text-xl font-semibold text-gray-900 mb-1">
                                    {member.name}
                                </h3>
                                <p className="text-gray-600">{member.role}</p>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default WebTeam;
