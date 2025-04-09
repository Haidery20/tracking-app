import React from 'react';
import Hero from '../components/Hero';
import HowItWorks from '../components/HowItWorks';
import WebServices from '../components/WebServices';
import WebFeatures from '../components/WebFeatures';
import WebTestimonials from '../components/WebTestimonials';
import WebPricing from '../components/WebPricing';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Home = () => {
    return (
        <div className="bg-transparent">
            <Hero />
            <HowItWorks />
            <WebServices />
            <WebFeatures />
            <WebTestimonials />
            <WebPricing />
            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Home;
