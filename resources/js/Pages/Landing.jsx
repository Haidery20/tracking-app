import React from 'react';
import { Head } from '@inertiajs/react';
import App from '@/Layouts/App';
import Hero from '@/components/Hero';
import Features from '@/components/Features';

export default function Landing() {
    return (
        <App>
            <Head title="Welcome to KONEKTA" />
            <main>
                <Hero />
                <Features />
            </main>
        </App>
    );
} 