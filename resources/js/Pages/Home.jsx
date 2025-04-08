import React from 'react';
import WebServices from '../components/WebServices.jsx';
import WebPricing from '../components/WebPricing.jsx';
import WebFeatures from '../components/WebFeatures.jsx';
import WebFAQ from '../components/WebFAQ.jsx';
import WebTestimonials from '../components/WebTestimonials.jsx';
import WebTeam from '../components/WebTeam.jsx';
import WebCTA from '../components/WebCTA.jsx';

const Home = () => {
    return (
        <div className="min-h-screen bg-gray-100">
            <WebServices />
            <WebPricing />
            <WebFeatures />
            <WebFAQ />
            <WebTestimonials />
            <WebTeam />
            <WebCTA />
        </div>
    );
};

export default Home;
