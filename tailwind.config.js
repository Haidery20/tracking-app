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
                primary: '#4A5D4B',
                'primary-dark': '#3A4D3B',
                danger: '#DC3545',
                'danger-dark': '#C82333',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
