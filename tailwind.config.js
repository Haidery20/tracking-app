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
                primary: '#1a365d', // Navy Blue
                'primary-dark': '#0f2a4a',
                secondary: '#4a5d23', // Military Green
                'secondary-dark': '#3a4a1c',
                accent: '#2c5282', // Darker Navy Blue
                'accent-dark': '#1a365d',
                success: '#10b981',
                'success-dark': '#059669',
                warning: '#f59e0b',
                'warning-dark': '#d97706',
                error: '#ef4444',
                'error-dark': '#dc2626',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
