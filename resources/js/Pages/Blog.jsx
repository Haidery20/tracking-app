import React from 'react';
import WebFeatures from '../components/WebFeatures';
import WebFAQ from '../components/WebFAQ';
import WebCTA from '../components/WebCTA';

const Blog = () => {
    const blogPosts = [
        {
            title: "The Future of Web Hosting",
            excerpt: "Explore the latest trends in web hosting technology and how they're shaping the future of digital presence.",
            date: "April 5, 2025",
            author: "John Smith",
            image: "https://via.placeholder.com/800x400",
            category: "Technology"
        },
        {
            title: "Best Practices for Web Design",
            excerpt: "Learn essential tips and best practices for creating modern, responsive, and user-friendly websites.",
            date: "April 3, 2025",
            author: "Sarah Johnson",
            image: "https://via.placeholder.com/800x400",
            category: "Design"
        },
        {
            title: "Bulk SMS Marketing Strategies",
            excerpt: "Discover effective strategies for using bulk SMS to enhance your marketing campaigns and customer engagement.",
            date: "April 1, 2025",
            author: "Michael Chen",
            image: "https://via.placeholder.com/800x400",
            category: "Marketing"
        }
    ];

    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Our Blog
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            Insights, tips, and updates from our experts
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {blogPosts.map((post, index) => (
                            <div key={index} className="bg-white p-6 rounded-lg shadow">
                                <img
                                    src={post.image}
                                    alt={post.title}
                                    className="w-full h-48 object-cover rounded-lg mb-4"
                                />
                                <div className="space-y-4">
                                    <div className="flex items-center gap-2">
                                        <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-royal-blue text-white">
                                            {post.category}
                                        </span>
                                        <span className="text-sm text-gray-500">{post.date}</span>
                                    </div>
                                    <h3 className="text-xl font-semibold text-gray-900">
                                        {post.title}
                                    </h3>
                                    <p className="text-gray-600">
                                        {post.excerpt}
                                    </p>
                                    <div className="flex items-center justify-between">
                                        <span className="text-sm text-gray-500">
                                            By {post.author}
                                        </span>
                                        <a
                                            href="#"
                                            className="text-sm font-medium text-royal-blue hover:text-royal-blue-dark"
                                        >
                                            Read more →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>

            <WebFAQ />
            <WebCTA />
        </div>
    );
};

export default Blog;
