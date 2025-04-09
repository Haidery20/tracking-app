/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css"
    ],
    theme: {
        extend: {
            colors: {
                primary: '#2563eb',
                'primary-dark': '#1d4ed8',
                secondary: '#3b82f6',
                'secondary-dark': '#3167d9',
                success: '#10b981',
                'success-dark': '#059669',
                warning: '#f59e0b',
                'warning-dark': '#d97706',
                error: '#ef4444',
                'error-dark': '#dc2626',
                'royal-blue': '#4f46e5',
                'royal-blue-dark': '#4338ca',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
