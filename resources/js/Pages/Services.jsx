import React from 'react';
import WebServices from '../components/WebServices';
import WebFeatures from '../components/WebFeatures';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Services = () => {
    return (
        <div className="min-h-screen bg-gray-100">
            <WebServices />
            <WebFeatures />
            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Services;
