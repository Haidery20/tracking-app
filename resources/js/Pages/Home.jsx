import React from 'react';

const Home = () => {
  return (
    <div className="home-page">
      {/* The HeroSection will be rendered above this component */}
      <main className="container mx-auto px-4 py-16">
        <h2 className="text-3xl font-bold mb-8">Welcome to KONEKTA</h2>
        <p className="text-xl mb-8">
          We provide professional web hosting, web design, and bulk SMS services.
        </p>
      </main>
    </div>
  );
};

export default Home;
