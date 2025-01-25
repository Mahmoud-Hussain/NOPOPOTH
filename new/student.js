document.addEventListener('DOMContentLoaded', function () {
    const sidenav = document.getElementById('mySidenav');
    const mainContent = document.getElementById('main');
    const overlay = document.createElement('div');
    overlay.className = 'overlay';
    document.body.appendChild(overlay);

    // Open Sidebar
    document.querySelector('.menu-icon').addEventListener('click', () => {
        sidenav.style.width = '250px';
        mainContent.classList.add('shifted');
        overlay.classList.add('active');
    });

    // Close Sidebar
    document.querySelector('.sidenav .closebtn').addEventListener('click', () => {
        sidenav.style.width = '0';
        mainContent.classList.remove('shifted');
        overlay.classList.remove('active');
    });

    // Close Sidebar on Overlay Click
    overlay.addEventListener('click', () => {
        sidenav.style.width = '0';
        mainContent.classList.remove('shifted');
        overlay.classList.remove('active');
    });

    // Expand/Collapse Reviews
    const reviewsSection = document.querySelector('.reviews');
    const reviewCloseBtn = reviewsSection.querySelector('.close-btn');

    reviewsSection.addEventListener('click', () => {
        reviewsSection.classList.toggle('expanded');
    });

    reviewCloseBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        reviewsSection.classList.remove('expanded');
    });

    // Expand/Collapse Messages
    const messagesSection = document.querySelector('.messages');
    const messageCloseBtn = messagesSection.querySelector('.close-btn');

    messagesSection.addEventListener('click', () => {
        messagesSection.classList.toggle('expanded');
    });

    messageCloseBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        messagesSection.classList.remove('expanded');
    });
});