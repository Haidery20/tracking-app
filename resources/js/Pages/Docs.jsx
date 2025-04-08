import React from 'react';
import WebFeatures from '../components/WebFeatures';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Docs = () => {
    const documentationSections = [
        {
            title: "Getting Started",
            items: [
                { title: "Introduction", href: "#" },
                { title: "System Requirements", href: "#" },
                { title: "Installation Guide", href: "#" },
                { title: "First Steps", href: "#" }
            ]
        },
        {
            title: "Web Hosting",
            items: [
                { title: "Account Setup", href: "#" },
                { title: "Domain Management", href: "#" },
                { title: "Email Configuration", href: "#" },
                { title: "FTP Access", href: "#" },
                { title: "SSL Certificates", href: "#" }
            ]
        },
        {
            title: "Web Design",
            items: [
                { title: "Template Selection", href: "#" },
                { title: "Customization Options", href: "#" },
                { title: "Content Management", href: "#" },
                { title: "SEO Optimization", href: "#" }
            ]
        },
        {
            title: "Bulk SMS",
            items: [
                { title: "API Integration", href: "#" },
                { title: "Campaign Management", href: "#" },
                { title: "Delivery Reports", href: "#" },
                { title: "Scheduling Options", href: "#" }
            ]
        },
        {
            title: "API Reference",
            items: [
                { title: "Authentication", href: "#" },
                { title: "Endpoints", href: "#" },
                { title: "Response Formats", href: "#" },
                { title: "Error Handling", href: "#" }
            ]
        }
    ];

    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Documentation
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            Comprehensive guides and API references for all our services
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {documentationSections.map((section, index) => (
                            <div key={index} className="bg-white p-6 rounded-lg shadow">
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">
                                    {section.title}
                                </h3>
                                <ul className="space-y-2">
                                    {section.items.map((item, itemIndex) => (
                                        <li key={itemIndex} className="flex items-center">
                                            <a
                                                href={item.href}
                                                className="text-gray-600 hover:text-royal-blue transition-colors duration-200"
                                            >
                                                {item.title}
                                            </a>
                                        </li>
                                    ))}
                                </ul>
                            </div>
                        ))}
                    </div>
                </div>
            </div>

            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Docs;
