import React from 'react';
import WebFeatures from '../components/WebFeatures';
import WebCTA from '../components/WebCTA';

const Careers = () => {
    const jobPositions = [
        {
            title: "Senior Web Developer",
            location: "Nairobi, Kenya",
            type: "Full-time",
            experience: "5+ years",
            description: "We're looking for an experienced web developer to join our growing team. You'll be working on cutting-edge web technologies and helping shape our digital products.",
            requirements: [
                "5+ years of experience in web development",
                "Expertise in React.js and Node.js",
                "Strong understanding of web hosting technologies",
                "Experience with cloud services",
                "Excellent problem-solving skills",
            ]
        },
        {
            title: "UI/UX Designer",
            location: "Remote",
            type: "Full-time",
            experience: "3+ years",
            description: "Join our creative team as a UI/UX designer. Create beautiful and functional user interfaces for our web hosting and SMS platforms.",
            requirements: [
                "3+ years of UI/UX design experience",
                "Proficiency in Figma or Adobe XD",
                "Strong portfolio of web design work",
                "Understanding of user-centered design principles",
                "Excellent communication skills",
            ]
        },
        {
            title: "Customer Support Specialist",
            location: "Nairobi, Kenya",
            type: "Full-time",
            experience: "2+ years",
            description: "Provide exceptional support to our customers. Help them with web hosting, web design, and SMS services issues.",
            requirements: [
                "2+ years of customer support experience",
                "Excellent communication skills in English",
                "Ability to troubleshoot technical issues",
                "Experience with helpdesk software",
                "Customer-focused attitude",
            ]
        }
    ];

    return (
        <div className="min-h-screen bg-gray-100">
            <div className="py-12 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h2 className="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Join Our Team
                        </h2>
                        <p className="mt-4 text-lg text-gray-600">
                            We're looking for talented individuals to join our growing team
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {jobPositions.map((position, index) => (
                            <div key={index} className="bg-white p-6 rounded-lg shadow">
                                <div className="space-y-4">
                                    <div className="flex items-center justify-between">
                                        <h3 className="text-xl font-semibold text-gray-900">
                                            {position.title}
                                        </h3>
                                        <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-royal-blue text-white">
                                            {position.type}
                                        </span>
                                    </div>
                                    <p className="text-sm text-gray-500">
                                        {position.location}
                                    </p>
                                    <p className="text-gray-600">
                                        {position.description}
                                    </p>
                                    <div className="space-y-2">
                                        <h4 className="font-medium text-gray-900">
                                            Requirements
                                        </h4>
                                        <ul className="list-disc list-inside text-gray-600">
                                            {position.requirements.map((req, reqIndex) => (
                                                <li key={reqIndex}>{req}</li>
                                            ))}
                                        </ul>
                                    </div>
                                    <a
                                        href="#"
                                        className="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-royal-blue"
                                    >
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>

            <WebFeatures />
            <WebCTA />
        </div>
    );
};

export default Careers;
