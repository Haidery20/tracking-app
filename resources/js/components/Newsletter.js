import React, { useState } from 'react';

const Newsletter = () => {
    const [email, setEmail] = useState('');
    const [success, setSuccess] = useState(false);
    const [error, setError] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await fetch('/api/newsletter', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email }),
            });

            if (!response.ok) {
                throw new Error('Failed to subscribe');
            }

            setSuccess(true);
            setError('');
            setEmail('');
        } catch (err) {
            setError('Failed to subscribe. Please try again.');
        }
    };

    return (
        <div className="bg-gray-50 p-6 rounded-lg shadow-md">
            <h3 className="text-xl font-semibold text-gray-900 mb-4">Subscribe to our Newsletter</h3>
            <form onSubmit={handleSubmit} className="space-y-4">
                <div>
                    <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                        Enter your email
                    </label>
                    <div className="mt-1">
                        <input
                            type="email"
                            id="email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            className="shadow-sm focus:ring-royal-blue focus:border-royal-blue block w-full sm:text-sm border-gray-300 rounded-md"
                            placeholder="your.email@example.com"
                            required
                        />
                    </div>
                </div>
                <button
                    type="submit"
                    className="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                >
                    Subscribe
                </button>
            </form>
            {success && (
                <div className="mt-4 text-green-600">
                    Thank you for subscribing!
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

export default Newsletter;
