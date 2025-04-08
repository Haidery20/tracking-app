import React from 'react';
import { motion } from 'framer-motion';

const Footer = () => {
    const containerVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: { opacity: 1, y: 0 },
    };

    return (
        <footer className="bg-gray-900 text-white">
            <div className="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <motion.div
                        initial="hidden"
                        whileInView="visible"
                        viewport={{ once: true }}
                        variants={containerVariants}
                        transition={{ duration: 0.5 }}
                    >
                        <h3 className="text-lg font-semibold mb-4">KONEKTA</h3>
                        <p className="text-gray-400 mb-4">
                            Your trusted partner in vehicle tracking and fleet management.
                        </p>
                        <div className="flex space-x-4">
                            <a href="#" className="text-gray-400 hover:text-white">
                                <i className="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white">
                                <i className="fab fa-twitter"></i>
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white">
                                <i className="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white">
                                <i className="fab fa-instagram"></i>
                            </a>
                        </div>
                    </motion.div>

                    <motion.div
                        initial="hidden"
                        whileInView="visible"
                        viewport={{ once: true }}
                        variants={containerVariants}
                        transition={{ duration: 0.5, delay: 0.1 }}
                    >
                        <h3 className="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul className="space-y-2">
                            <li>
                                <a href="/features" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="/pricing" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="/about" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="/contact" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </motion.div>

                    <motion.div
                        initial="hidden"
                        whileInView="visible"
                        viewport={{ once: true }}
                        variants={containerVariants}
                        transition={{ duration: 0.5, delay: 0.2 }}
                    >
                        <h3 className="text-lg font-semibold mb-4">Support</h3>
                        <ul className="space-y-2">
                            <li>
                                <a href="/faq" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="/terms" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="/privacy" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="/support" className="text-gray-400 hover:text-white transition-colors duration-200">
                                    Support
                                </a>
                            </li>
                        </ul>
                    </motion.div>

                    <motion.div
                        initial="hidden"
                        whileInView="visible"
                        viewport={{ once: true }}
                        variants={containerVariants}
                        transition={{ duration: 0.5, delay: 0.3 }}
                    >
                        <h3 className="text-lg font-semibold mb-4">Contact Us</h3>
                        <div className="space-y-2">
                            <p className="text-gray-400">123 Tracking Street, Fleet City, FC 12345</p>
                            <p className="text-gray-400">Phone: (555) 123-4567</p>
                            <p className="text-gray-400">Email: info@konekta.com</p>
                            <p className="text-gray-400">Business Hours: 9:00 AM - 5:00 PM</p>
                        </div>
                    </motion.div>
                </div>

                <div className="mt-12 border-t border-gray-800 pt-8">
                    <div className="flex justify-between items-center">
                        <p className="text-gray-400">
                            © 2025 KONEKTA. All rights reserved.
                        </p>
                        <div className="flex space-x-4">
                            <a href="#" className="text-gray-400 hover:text-white transition-colors duration-200">
                                Privacy
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white transition-colors duration-200">
                                Terms
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white transition-colors duration-200">
                                Cookies
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    );
};

export default Footer;
