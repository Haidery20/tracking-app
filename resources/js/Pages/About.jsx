import React from 'react';
import WebTeam from '../components/WebTeam';
import WebFeatures from '../components/WebFeatures';
import WebTestimonials from '../components/WebTestimonials';
import WebCTA from '../components/WebCTA';

const About = () => {
    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            About KONEKTA
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            Your trusted partner in web solutions and digital communication.
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <p className="text-xl text-gray-900 mb-8">
                            At KONEKTA, we're passionate about helping businesses succeed in the digital world. 
                            With our comprehensive web solutions and bulk SMS services, we provide the tools 
                            you need to grow and thrive online.
                        </p>
                    </div>
                </div>
            </div>

            <WebFeatures />
            <WebTeam />
            <WebTestimonials />
            <WebCTA />
        </div>
    );
};

export default About;
