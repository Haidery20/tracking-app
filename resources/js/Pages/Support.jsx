import React, { useState } from 'react';
import WebFAQ from '../components/WebFAQ';
import WebContactForm from '../components/WebContactForm';
import WebCTA from '../components/WebCTA';

const Support = () => {
    const [selectedCategory, setSelectedCategory] = useState('General');

    const supportCategories = [
        {
            title: "General",
            icon: "fas fa-question-circle",
            description: "Common questions about our services",
            items: [
                { title: "How do I get started?", href: "#" },
                { title: "What are your service hours?", href: "#" },
                { title: "How can I contact support?", href: "#" }
            ]
        },
        {
            title: "Web Hosting",
            icon: "fas fa-server",
            description: "Technical support for hosting",
            items: [
                { title: "Website not loading", href: "#" },
                { title: "Email configuration", href: "#" },
                { title: "FTP access issues", href: "#" }
            ]
        },
        {
            title: "Web Design",
            icon: "fas fa-paint-brush",
            description: "Design and customization help",
            items: [
                { title: "Template changes", href: "#" },
                { title: "Content updates", href: "#" },
                { title: "SEO optimization", href: "#" }
            ]
        },
        {
            title: "Bulk SMS",
            icon: "fas fa-sms",
            description: "SMS service support",
            items: [
                { title: "Campaign setup", href: "#" },
                { title: "Delivery issues", href: "#" },
                { title: "API integration", href: "#" }
            ]
        }
    ];

    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Support Center
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            Get help with our services and find solutions to common issues
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <div className="bg-white p-6 rounded-lg shadow">
                            <h3 className="text-xl font-semibold text-gray-900 mb-4">
                                Support Categories
                            </h3>
                            <div className="space-y-2">
                                {supportCategories.map((category, index) => (
                                    <button
                                        key={index}
                                        onClick={() => setSelectedCategory(category.title)}
                                        className={`flex items-center justify-between w-full px-4 py-2 text-left rounded-lg transition-colors duration-200 ${
                                            selectedCategory === category.title
                                                ? 'bg-royal-blue text-white'
                                                : 'hover:bg-gray-50'
                                        }`}
                                    >
                                        <div className="flex items-center gap-3">
                                            <i className={`${category.icon} text-xl`} />
                                            <span>{category.title}</span>
                                        </div>
                                        <i className={`fas fa-chevron-${selectedCategory === category.title ? 'up' : 'down'} transform transition-transform duration-300`} />
                                    </button>
                                ))}
                            </div>
                        </div>

                        <div className="col-span-2">
                            <div className="bg-white p-6 rounded-lg shadow mb-8">
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">
                                    {selectedCategory} Support
                                </h3>
                                {supportCategories.find(cat => cat.title === selectedCategory)?.items.map((item, index) => (
                                    <div key={index} className="flex items-center gap-3 mb-3">
                                        <i className="fas fa-circle text-sm text-gray-400" />
                                        <a
                                            href={item.href}
                                            className="text-gray-600 hover:text-royal-blue transition-colors duration-200"
                                        >
                                            {item.title}
                                        </a>
                                    </div>
                                ))}
                            </div>

                            <div className="bg-white p-6 rounded-lg shadow">
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">
                                    Contact Support
                                </h3>
                                <p className="text-gray-600 mb-6">
                                    For immediate assistance, please fill out the form below and our support team will get back to you shortly.
                                </p>
                                <WebContactForm />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Support;
