import './bootstrap.jsx';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route } from 'react-router-dom';

import Home from './Pages/Home.jsx';
import Services from './Pages/Services.jsx';
import Pricing from './Pages/Pricing.jsx';
import Contact from './Pages/Contact.jsx';
import About from './Pages/About.jsx';
import Blog from './Pages/Blog.jsx';
import Careers from './Pages/Careers.jsx';
import Docs from './Pages/Docs.jsx';
import Support from './Pages/Support.jsx';
import HeroSection from './components/HeroSection';

class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);
        this.state = { hasError: false, error: null };
    }

    static getDerivedStateFromError(error) {
        return { hasError: true, error };
    }

    componentDidCatch(error, errorInfo) {
        console.error('React Error Boundary caught an error:', error, errorInfo);
    }

    render() {
        if (this.state.hasError) {
            return (
                <div className="p-4">
                    <h1 className="text-red-600 text-xl">Something went wrong.</h1>
                    <pre className="mt-2 p-2 bg-gray-100 rounded">
                        {this.state.error?.toString()}
                    </pre>
                </div>
            );
        }

        return this.props.children;
    }
}

console.log('App.jsx: Starting to render...');

const container = document.getElementById('app');
if (!container) {
    console.error('App.jsx: Could not find #app element!');
} else {
    console.log('App.jsx: Found #app element, creating root...');
    const root = createRoot(container);
    
    console.log('App.jsx: Rendering app...');
    root.render(
        <React.StrictMode>
            <BrowserRouter>
                <ErrorBoundary>
                    <div className="app">
                        <HeroSection />
                        <Routes>
                            <Route path="/" element={<Home />} />
                            <Route path="/services" element={<Services />} />
                            <Route path="/pricing" element={<Pricing />} />
                            <Route path="/contact" element={<Contact />} />
                            <Route path="/about" element={<About />} />
                            <Route path="/blog" element={<Blog />} />
                            <Route path="/careers" element={<Careers />} />
                            <Route path="/docs" element={<Docs />} />
                            <Route path="/support" element={<Support />} />
                        </Routes>
                    </div>
                </ErrorBoundary>
            </BrowserRouter>
        </React.StrictMode>
    );
    console.log('App.jsx: Render complete!');
}
