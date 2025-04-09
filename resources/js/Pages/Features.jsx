import React from 'react';
import { Head } from '@inertiajs/react';
import App from '@/Layouts/App';
import Features from '@/components/Features';

export default function FeaturesPage() {
    return (
        <App>
            <Head title="Features - KONEKTA" />
            <main>
                <Features />
            </main>
        </App>
    );
} 