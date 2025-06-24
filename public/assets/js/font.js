document.addEventListener('DOMContentLoaded', function() {
    
    const currentYearSpan = document.getElementById('current-year');
    if (currentYearSpan) {
        currentYearSpan.textContent = new Date().getFullYear();
    }

    const smileyIcon = document.getElementById('smile-icon');
        smileyIcon.addEventListener('click', () => {
            alert('Hello there! 😊');
        });
});