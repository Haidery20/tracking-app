import React, { useState } from 'react';

const WebFAQ = () => {
    const faqs = [
        {
            question: "What is included in your web hosting plans?",
            answer: "All our plans include SSD storage, free SSL certificates, 24/7 support, and unlimited bandwidth. Our Professional and Enterprise plans also offer multiple websites, email accounts, and advanced features.",
        },
        {
            question: "How do I get started with web design services?",
            answer: "Simply contact us through our contact form or schedule a consultation. We'll discuss your requirements and provide a custom quote tailored to your needs.",
        },
        {
            question: "What is your SMS delivery rate?",
            answer: "Our SMS gateway has a delivery rate of over 99%. We use multiple carriers to ensure maximum delivery success and provide real-time delivery reports.",
        },
        {
            question: "Do you offer custom domain hosting?",
            answer: "Yes, all our hosting plans include custom domain support. You can manage your domain settings through our easy-to-use control panel.",
        },
        {
            question: "What kind of support do you provide?",
            answer: "We offer 24/7 support through live chat, email, and phone. Our support team is available to help with any questions or issues you may have.",
        },
        {
            question: "Can I upgrade my plan later?",
            answer: "Absolutely! You can upgrade or downgrade your plan at any time through your account dashboard. We make it easy to scale as your needs change.",
        },
    ];

    const [activeFAQ, setActiveFAQ] = useState(null);

    return (
        <div className="py-12 bg-gray-50">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Frequently Asked Questions
                    </h2>
                    <p className="mt-4 text-lg text-gray-600">
                        Find answers to common questions about our services
                    </p>
                </div>

                <div className="mt-12">
                    {faqs.map((faq, index) => (
                        <div
                            key={index}
                            className="bg-white rounded-lg shadow-sm mb-4"
                        >
                            <button
                                onClick={() => setActiveFAQ(activeFAQ === index ? null : index)}
                                className="w-full flex justify-between items-center p-6 text-left text-gray-900 hover:bg-gray-50"
                            >
                                <span className="text-lg font-medium">{faq.question}</span>
                                <i
                                    className={`fas fa-chevron-${activeFAQ === index ? 'up' : 'down'} transform transition-transform duration-300`}
                                />
                            </button>
                            {activeFAQ === index && (
                                <div className="border-t border-gray-200 p-6">
                                    <p className="text-gray-600">{faq.answer}</p>
                                </div>
                            )}
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default WebFAQ;
