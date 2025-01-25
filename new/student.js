document.addEventListener('DOMContentLoaded', function () {
    const sidenav = document.querySelector('.sidenav');
    const overlay = document.querySelector('.overlay');
    const topbar = document.querySelector('.topbar');
    const mainContent = document.querySelector('.main-content');
    const dashboardSection = document.querySelector('.dashboard-section');

    // Open Sidebar
    document.querySelector('.menu-icon').addEventListener('click', () => {
        sidenav.style.width = '250px';
        overlay.classList.add('active');
        topbar.classList.add('expanded');
        mainContent.classList.add('expanded');
        dashboardSection.classList.add('expanded');
    });

    // Close Sidebar
    document.querySelector('.sidenav .closebtn').addEventListener('click', () => {
        sidenav.style.width = '0';
        overlay.classList.remove('active');
        topbar.classList.remove('expanded');
        mainContent.classList.remove('expanded');
        dashboardSection.classList.remove('expanded');
    });

    // Close Sidebar on Overlay Click
    overlay.addEventListener('click', () => {
        sidenav.style.width = '0';
        overlay.classList.remove('active');
        topbar.classList.remove('expanded');
        mainContent.classList.remove('expanded');
        dashboardSection.classList.remove('expanded');
    });
});