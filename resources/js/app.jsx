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

const container = document.getElementById('app');
const root = createRoot(container);

root.render(
    <BrowserRouter>
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
    </BrowserRouter>
);
