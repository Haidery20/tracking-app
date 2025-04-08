import React, { useState } from 'react';
import { motion } from 'framer-motion';
import axios from 'axios';

const WebContactForm = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        phone: '',
        service: 'web-hosting',
        message: '',
        'g-recaptcha-response': ''
    });
    const [loading, setLoading] = useState(false);
    const [success, setSuccess] = useState(false);
    const [error, setError] = useState('');

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData(prev => ({
            ...prev,
            [name]: value
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        setLoading(true);
        setError('');
        setSuccess(false);

        try {
            const response = await axios.post('/api/contact', formData);
            if (response.data.success) {
                setSuccess(true);
                setFormData({
                    name: '',
                    email: '',
                    phone: '',
                    service: 'web-hosting',
                    message: '',
                    'g-recaptcha-response': ''
                });
            }
        } catch (err) {
            setError(err.response?.data?.message || 'An error occurred. Please try again.');
        } finally {
            setLoading(false);
        }
    };

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
            className="bg-white p-6 rounded-lg shadow-md"
        >
            <h3 className="text-2xl font-bold text-gray-900 mb-6">
                Contact Us
            </h3>
            
            {success ? (
                <div className="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
                    Your message has been sent successfully!
                </div>
            ) : error ? (
                <div className="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                    {error}
                </div>
            ) : null}

            <form onSubmit={handleSubmit} className="space-y-6">
                <div>
                    <label htmlFor="name" className="block text-sm font-medium text-gray-700">
                        Full Name
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value={formData.name}
                        onChange={handleChange}
                        required
                        className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-royal-blue focus:ring-royal-blue"
                    />
                </div>

                <div>
                    <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                        Email Address
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value={formData.email}
                        onChange={handleChange}
                        required
                        className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-royal-blue focus:ring-royal-blue"
                    />
                </div>

                <div>
                    <label htmlFor="phone" className="block text-sm font-medium text-gray-700">
                        Phone Number
                    </label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value={formData.phone}
                        onChange={handleChange}
                        className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-royal-blue focus:ring-royal-blue"
                    />
                </div>

                <div>
                    <label htmlFor="service" className="block text-sm font-medium text-gray-700">
                        Service
                    </label>
                    <select
                        id="service"
                        name="service"
                        value={formData.service}
                        onChange={handleChange}
                        required
                        className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-royal-blue focus:ring-royal-blue"
                    >
                        <option value="web-hosting">Web Hosting</option>
                        <option value="web-design">Web Design</option>
                        <option value="bulk-sms">Bulk SMS</option>
                    </select>
                </div>

                <div>
                    <label htmlFor="message" className="block text-sm font-medium text-gray-700">
                        Message
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        value={formData.message}
                        onChange={handleChange}
                        required
                        rows="4"
                        className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-royal-blue focus:ring-royal-blue"
                    />
                </div>

                <div className="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>

                <div>
                    <button
                        type="submit"
                        disabled={loading}
                        className="w-full flex justify-center py-3 px-4 border border-transparent text-base font-medium rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                    >
                        {loading ? 'Sending...' : 'Send Message'}
                    </button>
                </div>
            </form>
        </motion.div>
    );
};

export default WebContactForm;
