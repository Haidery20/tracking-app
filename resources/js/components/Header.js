import React, { useState } from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

    const navigation = [
        { name: 'Home', href: '/' },
        { name: 'Features', href: '/features' },
        { name: 'Pricing', href: '/pricing' },
        { name: 'About', href: '/about' },
    ];

    return (
        <nav className="bg-white/80 backdrop-blur-sm fixed w-full z-50 transition-all duration-300">
            <div className="max-w-7xl mx-auto px-4">
                <div className="flex justify-between h-16">
                    <div className="flex">
                        <div className="flex-shrink-0 flex items-center">
                            <Link to="/" className="flex items-center">
                                <img className="h-8 w-auto" src="https://via.placeholder.com/150" alt="KONEKTA Logo" />
                                <span className="ml-2 text-xl font-bold text-royal-blue">KONEKTA</span>
                            </Link>
                        </div>
                    </div>

                    <div className="hidden sm:ml-6 sm:flex sm:space-x-8">
                        {navigation.map((item) => (
                            <Link
                                key={item.name}
                                to={item.href}
                                className="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 transition-colors duration-200"
                            >
                                {item.name}
                            </Link>
                        ))}
                    </div>

                    <div className="hidden sm:ml-6 sm:flex sm:items-center">
                        <Link
                            to="/login"
                            className="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark transition-colors duration-200"
                        >
                            Login
                        </Link>
                        <Link
                            to="/register"
                            className="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-royal-blue bg-gray-100 hover:bg-gray-200 transition-colors duration-200"
                        >
                            Register
                        </Link>
                    </div>

                    <div className="flex items-center sm:hidden">
                        <button
                            type="button"
                            className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100"
                            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                        >
                            <span className="sr-only">Open main menu</span>
                            <svg
                                className="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    strokeWidth="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div className={`sm:hidden ${isMobileMenuOpen ? '' : 'hidden'}`}>
                <div className="px-2 pt-2 pb-3 space-y-1">
                    {navigation.map((item) => (
                        <Link
                            key={item.name}
                            to={item.href}
                            className="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-50 transition-colors duration-200"
                            onClick={() => setIsMobileMenuOpen(false)}
                        >
                            {item.name}
                        </Link>
                    ))}
                </div>
                <div className="px-5 py-3">
                    <Link
                        to="/login"
                        className="block w-full px-3 py-2 text-center rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark transition-colors duration-200"
                    >
                        Login
                    </Link>
                    <Link
                        to="/register"
                        className="mt-3 block w-full px-3 py-2 text-center rounded-md text-royal-blue bg-gray-100 hover:bg-gray-200 transition-colors duration-200"
                    >
                        Register
                    </Link>
                </div>
            </div>
        </nav>
    );
};

export default Header;
