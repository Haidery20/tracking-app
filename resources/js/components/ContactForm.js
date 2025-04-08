import React, { useState } from 'react';

const ContactForm = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        subject: '',
        message: '',
    });

    const [success, setSuccess] = useState(false);
    const [error, setError] = useState('');

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({
            ...prev,
            [name]: value,
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await fetch('/api/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            });

            if (!response.ok) {
                throw new Error('Failed to send message');
            }

            setSuccess(true);
            setError('');
            setFormData({
                name: '',
                email: '',
                subject: '',
                message: '',
            });
        } catch (err) {
            setError('Failed to send message. Please try again.');
        }
    };

    return (
        <div className="bg-white p-6 rounded-lg shadow-md">
            <h3 className="text-xl font-semibold text-gray-900 mb-6">Get in Touch</h3>
            <form onSubmit={handleSubmit} className="space-y-6">
                <div className="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label htmlFor="name" className="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div className="mt-1">
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value={formData.name}
                                onChange={handleChange}
                                className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                required
                            />
                        </div>
                    </div>
                    <div>
                        <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <div className="mt-1">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value={formData.email}
                                onChange={handleChange}
                                className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                                required
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <label htmlFor="subject" className="block text-sm font-medium text-gray-700">
                        Subject
                    </label>
                    <div className="mt-1">
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value={formData.subject}
                            onChange={handleChange}
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                            required
                        />
                    </div>
                </div>

                <div>
                    <label htmlFor="message" className="block text-sm font-medium text-gray-700">
                        Message
                    </label>
                    <div className="mt-1">
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            value={formData.message}
                            onChange={handleChange}
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                            required
                        />
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        className="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                    >
                        Send Message
                    </button>
                </div>
            </form>
            {success && (
                <div className="mt-4 text-green-600">
                    Your message has been sent successfully!
                </div>
            )}
            {error && (
                <div className="mt-4 text-red-600">
                    {error}
                </div>
            )}
        </div>
    );
};

export default ContactForm;
