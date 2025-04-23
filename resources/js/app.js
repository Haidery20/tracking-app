import './bootstrap';
import '../css/app.css';

// Dark mode toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        document.documentElement.setAttribute('class', savedTheme);
    } else {
        // Default to light mode
        document.documentElement.setAttribute('class', 'light');
    }

    // Theme toggle button click handler
    document.querySelector('.theme-toggle').addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('class');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        // Update HTML class
        document.documentElement.setAttribute('class', newTheme);
        
        // Save theme preference
        localStorage.setItem('theme', newTheme);
    });
});