import React from 'react';
import WebPricing from '../components/WebPricing';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Pricing = () => {
    return (
        <div className="min-h-screen bg-gray-100">
            <WebPricing />
            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Pricing;
