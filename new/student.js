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

    // Toggle Sub-List for Categories
    const categoryLink = document.querySelector('.sidenav .category');
    if (categoryLink) {
        categoryLink.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior
            this.classList.toggle('active'); // Toggle active class
            const subList = this.nextElementSibling; // Get the sublist
            if (subList && subList.classList.contains('sub-list')) {
                subList.style.display = this.classList.contains('active') ? 'block' : 'none'; // Toggle sublist visibility
            }
        });
    }

    // Expand/Collapse Messages Section
    const messagesSection = document.querySelector('.messages');
    const messageItems = document.querySelectorAll('.message-item');
    const dashboardSearchContainer = document.querySelector('.dashboard-search-container');
    const popularJobs = document.querySelector('.popular-jobs');
    const reviewsSection = document.querySelector('.reviews');
    const reviewItems = document.querySelectorAll('.review-item');

    // Create close button for messages
    const messagesCloseBtn = document.createElement('span');
    messagesCloseBtn.className = 'close-btn';
    messagesCloseBtn.innerHTML = '<i class="fas fa-times"></i>'; // Font Awesome close icon
    messagesSection.appendChild(messagesCloseBtn);

    // Create close button for reviews
    const reviewsCloseBtn = document.createElement('span');
    reviewsCloseBtn.className = 'close-btn';
    reviewsCloseBtn.innerHTML = '<i class="fas fa-times"></i>'; // Font Awesome close icon
    reviewsSection.appendChild(reviewsCloseBtn);

    // Message input bar
    const messageInputBar = document.createElement('div');
    messageInputBar.className = 'message-input-bar';
    messageInputBar.innerHTML = `
        <input type="text" placeholder="Type your message...">
        <button><i class="fas fa-paper-plane"></i></button>
    `;
    messagesSection.appendChild(messageInputBar);

    // Review input bar
    const reviewInputBar = document.createElement('div');
    reviewInputBar.className = 'review-input-bar';
    reviewInputBar.innerHTML = `
        <input type="text" placeholder="Type your review...">
        <button><i class="fas fa-paper-plane"></i></button>
    `;
    reviewsSection.appendChild(reviewInputBar);

    // Expand messages section
    messageItems.forEach(messageItem => {
        messageItem.addEventListener('click', function () {
            // Expand the messages section
            messagesSection.classList.add('expanded');

            // Shrink and fade other sections
            dashboardSearchContainer.style.transform = 'scale(0.8)';
            popularJobs.style.transform = 'scale(0.8)';
            reviewsSection.style.transform = 'scale(0.8)';
            dashboardSearchContainer.style.opacity = '0.5';
            popularJobs.style.opacity = '0.5';
            reviewsSection.style.opacity = '0.5';
        });
    });

    // Close the expanded messages section
    messagesCloseBtn.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent event bubbling
        messagesSection.classList.remove('expanded');

        // Restore other sections
        dashboardSearchContainer.style.transform = 'scale(1)';
        popularJobs.style.transform = 'scale(1)';
        reviewsSection.style.transform = 'scale(1)';
        dashboardSearchContainer.style.opacity = '1';
        popularJobs.style.opacity = '1';
        reviewsSection.style.opacity = '1';
    });

    // Expand reviews section
    reviewItems.forEach(reviewItem => {
        reviewItem.addEventListener('click', function () {
            // Expand the reviews section
            reviewsSection.classList.add('expanded');

            // Shrink and fade other sections
            dashboardSearchContainer.style.transform = 'scale(0.8)';
            popularJobs.style.transform = 'scale(0.8)';
            messagesSection.style.transform = 'scale(0.8)';
            dashboardSearchContainer.style.opacity = '0.5';
            popularJobs.style.opacity = '0.5';
            messagesSection.style.opacity = '0.5';
        });
    });

    // Close the expanded reviews section
    reviewsCloseBtn.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent event bubbling
        reviewsSection.classList.remove('expanded');

        // Restore other sections
        dashboardSearchContainer.style.transform = 'scale(1)';
        popularJobs.style.transform = 'scale(1)';
        messagesSection.style.transform = 'scale(1)';
        dashboardSearchContainer.style.opacity = '1';
        popularJobs.style.opacity = '1';
        messagesSection.style.opacity = '1';
    });
});