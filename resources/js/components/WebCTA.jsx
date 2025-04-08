import React from 'react';

const WebCTA = () => {
    return (
        <div className="bg-gradient-to-r from-royal-blue to-military-green py-12">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-3xl font-extrabold text-white sm:text-4xl">
                        Ready to boost your online presence?
                    </h2>
                    <p className="mt-4 text-lg text-gray-200 max-w-md mx-auto">
                        Join thousands of businesses already growing with our services.
                        Start your journey today with a free consultation.
                    </p>
                    <div className="mt-8">
                        <a
                            href="#contact"
                            className="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-white/10 hover:bg-white/20 transition-colors duration-300"
                        >
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default WebCTA;
