document.addEventListener('DOMContentLoaded', function() {
    // Simple animation for team members
    const teamMembers = document.querySelectorAll('.team-member');
    
    teamMembers.forEach((member, index) => {
        // Add slight delay to each member's animation
        member.style.animationDelay = `${index * 0.1}s`;
    });
    
    // Highlight current page in navigation
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    });
});