import React from 'react';
import { motion } from 'framer-motion';

const Hero = () => {
    return (
        <div className="relative bg-gradient-to-r from-primary to-secondary overflow-hidden">
            {/* Background pattern */}
            <div className="absolute inset-0 opacity-10">
                <div className="absolute inset-0 bg-[url('/images/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
            </div>

            <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div className="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div className="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                        <motion.h1 
                            initial={{ opacity: 0, y: 20 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.8 }}
                            className="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl"
                        >
                            <span className="block">Track Your Assets with</span>
                            <span className="block text-secondary">Precision and Ease</span>
                        </motion.h1>
                        <motion.p 
                            initial={{ opacity: 0, y: 20 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.8, delay: 0.2 }}
                            className="mt-6 max-w-3xl mx-auto text-xl text-gray-100"
                        >
                            KONEKTA provides real-time tracking solutions for your vehicles, equipment, and valuable assets. 
                            Get instant alerts, detailed analytics, and peace of mind knowing your assets are secure.
                        </motion.p>
                        <motion.div 
                            initial={{ opacity: 0, y: 20 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.8, delay: 0.4 }}
                            className="mt-10 flex justify-center lg:justify-start gap-4"
                        >
                            <a
                                href="#features"
                                className="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-dark transition-colors duration-200"
                            >
                                Explore Features
                            </a>
                            <a
                                href="#pricing"
                                className="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-100 transition-colors duration-200"
                            >
                                View Pricing
                            </a>
                        </motion.div>
                    </div>
                    <div className="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <motion.div
                            initial={{ opacity: 0, scale: 0.9 }}
                            animate={{ opacity: 1, scale: 1 }}
                            transition={{ duration: 0.8, delay: 0.4 }}
                            className="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md"
                        >
                            <img
                                className="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5"
                                src="/images/dashboard-preview.png"
                                alt="KONEKTA Dashboard Preview"
                            />
                            <div className="absolute inset-0 rounded-lg ring-1 ring-inset ring-black ring-opacity-10"></div>
                        </motion.div>
                    </div>
                </div>

                {/* Stats Section */}
                <motion.div 
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8, delay: 0.6 }}
                    className="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3"
                >
                    <div className="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <div className="text-3xl font-bold text-white">10,000+</div>
                        <div className="mt-2 text-sm text-gray-200">Active Trackers</div>
                    </div>
                    <div className="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <div className="text-3xl font-bold text-white">99.9%</div>
                        <div className="mt-2 text-sm text-gray-200">Uptime Guarantee</div>
                    </div>
                    <div className="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <div className="text-3xl font-bold text-white">24/7</div>
                        <div className="mt-2 text-sm text-gray-200">Support Available</div>
                    </div>
                </motion.div>
            </div>
        </div>
    );
};

export default Hero; 