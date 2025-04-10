import React from 'react';
import Lottie from 'lottie-react';
import placeholderAnimation from '../assets/animations/placeholder.json';

const HeroSection = () => {
  return (
    <section className="hero-section relative bg-gradient-to-b from-gray-900 to-gray-800 min-h-screen flex items-center justify-center">
      <div className="container mx-auto px-4 py-16">
        <div className="flex flex-col lg:flex-row items-center justify-between gap-12">
          <div className="text-white text-center lg:text-left max-w-3xl">
            <h1 className="text-4xl lg:text-6xl font-bold mb-6">
              <span className="block">KONEKTA:</span>
              <span className="block">Your trusted partner for web hosting, web design, and bulk SMS services</span>
            </h1>
            <p className="text-xl lg:text-2xl mb-8">
              Your trusted partner for web hosting, web design, and bulk SMS services
            </p>
            <div className="flex justify-center lg:justify-start space-x-4">
              <button className="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                Get Started
              </button>
              <button className="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                Learn More
              </button>
            </div>
          </div>
          <div className="w-full lg:w-1/2">
            <div className="aspect-w-16 aspect-h-9 bg-gray-700 rounded-lg">
              <Lottie 
                animationData={placeholderAnimation} 
                loop={true}
                autoplay={true}
                style={{ width: '100%', height: '100%' }}
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
