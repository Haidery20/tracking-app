import React from 'react';
import WebContactForm from '../components/WebContactForm';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Contact = () => {
    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Get in Touch
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            Ready to start your project? Contact us today!
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div>
                            <h3 className="text-2xl font-bold text-gray-900 mb-6">
                                Contact Information
                            </h3>
                            <div className="space-y-6">
                                <div>
                                    <h4 className="font-medium text-gray-900">Our Office</h4>
                                    <p className="text-gray-600">
                                        123 Web Solutions Street<br />
                                        Tech City, WC 12345<br />
                                        Kenya
                                    </p>
                                </div>
                                <div>
                                    <h4 className="font-medium text-gray-900">Phone</h4>
                                    <p className="text-gray-600">
                                        <a href="tel:+254123456789" className="hover:text-royal-blue">
                                            +254 123 456 789
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <h4 className="font-medium text-gray-900">Email</h4>
                                    <p className="text-gray-600">
                                        <a href="mailto:info@konekta.com" className="hover:text-royal-blue">
                                            info@konekta.com
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <h4 className="font-medium text-gray-900">Business Hours</h4>
                                    <p className="text-gray-600">
                                        Monday - Friday: 9:00 AM - 5:00 PM<br />
                                        Saturday: 10:00 AM - 2:00 PM<br />
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <WebContactForm />
                        </div>
                    </div>
                </div>
            </div>

            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Contact;
