document.addEventListener("DOMContentLoaded", function () {
    const sidenav = document.getElementById("mySidenav");
    const mainContent = document.getElementById("main");
    const navbar = document.querySelector(".navbar");
    const overlay = document.createElement("div"); // Create overlay once
    overlay.className = "overlay";
    document.body.appendChild(overlay);

    // Open Sidebar
    document.querySelector(".menu-icon").addEventListener("click", () => {
        sidenav.style.width = "250px";
        mainContent.classList.add("shifted");
        navbar.classList.add("shifted");
        overlay.classList.add("active"); // Show the overlay
    });

    // Close Sidebar
    document.querySelector(".sidenav .closebtn").addEventListener("click", () => {
        sidenav.style.width = "0";
        mainContent.classList.remove("shifted");
        navbar.classList.remove("shifted");
        overlay.classList.remove("active"); // Hide the overlay
    });

    // Close Sidebar on Overlay Click
    overlay.addEventListener("click", () => {
        sidenav.style.width = "0";
        mainContent.classList.remove("shifted");
        navbar.classList.remove("shifted");
        overlay.classList.remove("active"); // Hide the overlay
    });

    // Toggle Sub-List for Categories
    const categoryLink = document.querySelector(".sidenav .category");
    if (categoryLink) {
        categoryLink.addEventListener("click", function (e) {
            e.preventDefault();
            this.classList.toggle("active");
            const subList = this.nextElementSibling;
            if (subList && subList.classList.contains("sub-list")) {
                subList.style.display = this.classList.contains("active")
                    ? "block"
                    : "none";
            }
        });
    }

    // Notification Popup
    const notificationIcon = document.querySelector(".navbar .icon");
    const notificationPopup = document.getElementById("notificationPopup");

    if (notificationIcon && notificationPopup) {
        // Open Notification Popup
        notificationIcon.addEventListener("click", function (e) {
            e.stopPropagation();
            notificationPopup.classList.toggle("active");
        });

        // Close Notification Popup when clicking outside
        document.addEventListener("click", function (e) {
            if (
                !notificationPopup.contains(e.target) &&
                !notificationIcon.contains(e.target)
            ) {
                notificationPopup.classList.remove("active");
            }
        });

        // Close Notification Popup
        function closeNotificationPopup() {
            notificationPopup.classList.remove("active");
        }
    }

    // Reviews Section
    const reviewsSection = document.querySelector(".reviews");
    const reviewItems = document.querySelectorAll(".review-item");
    const reviewsCloseBtn = document.createElement("span");
    reviewsCloseBtn.className = "close-btn";
    reviewsCloseBtn.innerHTML = '<i class="fas fa-times"></i>';
    reviewsSection.appendChild(reviewsCloseBtn);

    // Expand reviews section
    reviewItems.forEach((reviewItem) => {
        reviewItem.addEventListener("click", function () {
            reviewsSection.classList.add("expanded");
        });
    });

    // Close the expanded reviews section
    reviewsCloseBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        reviewsSection.classList.remove("expanded");
    });

    // Review input bar
    const reviewInputBar = document.createElement("div");
    reviewInputBar.className = "review-input-bar";
    reviewInputBar.innerHTML = `
        <input type="text" placeholder="Type your review...">
        <button><i class="fas fa-paper-plane"></i></button>
    `;
    reviewsSection.appendChild(reviewInputBar);

    // Messages Section
    const messagesSection = document.querySelector(".messages");
    const messageItems = document.querySelectorAll(".message-item");
    const messagesCloseBtn = document.createElement("span");
    messagesCloseBtn.className = "close-btn";
    messagesCloseBtn.innerHTML = '<i class="fas fa-times"></i>';
    messagesSection.appendChild(messagesCloseBtn);

    // Expand messages section and show individual client messages
    messageItems.forEach((messageItem) => {
        messageItem.addEventListener("click", function () {
            const client = this.getAttribute("data-client");
            messagesSection.classList.add("expanded");
            messagesSection.innerHTML = `
                <h2>Messages with ${client}</h2>
                <div class="message-list">
                    <div class="message-item">
                        <p>${this.querySelector("p").textContent}</p>
                    </div>
                </div>
                <div class="message-input-bar">
                    <input type="text" placeholder="Type your message...">
                    <button><i class="fas fa-paper-plane"></i></button>
                </div>
                <span class="close-btn"><i class="fas fa-times"></i></span>
            `;

            // Close the expanded messages section
            const closeBtn = messagesSection.querySelector(".close-btn");
            closeBtn.addEventListener("click", function (e) {
                e.stopPropagation();
                messagesSection.classList.remove("expanded");
                location.reload(); // Reload to reset the messages section
            });
        });
    });

    // Close the expanded messages section
    messagesCloseBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        messagesSection.classList.remove("expanded");
    });

    // Message input bar
    const messageInputBar = document.createElement("div");
    messageInputBar.className = "message-input-bar";
    messageInputBar.innerHTML = `
        <input type="text" placeholder="Type your message...">
        <button><i class="fas fa-paper-plane"></i></button>
    `;
    messagesSection.appendChild(messageInputBar);

    // Post Job Popup
    const postJobPopup = document.getElementById("postJobPopup");
    const fabPostJob = document.querySelector(".fab[name='fab-post-job']");

    if (fabPostJob && postJobPopup) {
        // Open Post Job Popup
        fabPostJob.addEventListener("click", function (e) {
            e.preventDefault();
            postJobPopup.classList.add("active");
            overlay.classList.add("active"); // Show the overlay
        });

        // Close Post Job Popup
        function closePostJobPopup() {
            postJobPopup.classList.remove("active");
            overlay.classList.remove("active"); // Hide the overlay
        }

        // Close Post Job Popup when clicking outside
        document.addEventListener("click", function (e) {
            if (
                !postJobPopup.contains(e.target) &&
                !fabPostJob.contains(e.target)
            ) {
                postJobPopup.classList.remove("active");
                overlay.classList.remove("active"); // Hide the overlay
            }
        });
    }

    // Pending Jobs Popup
    const pendingJobsPopup = document.getElementById("pendingJobsPopup");
    const pendingJobsLink = document.querySelector(".sidenav a[name='pending-orders-link']");

    if (pendingJobsLink && pendingJobsPopup) {
        // Open Pending Jobs Popup
        pendingJobsLink.addEventListener("click", function (e) {
            e.preventDefault();
            pendingJobsPopup.classList.add("active");
            overlay.classList.add("active"); // Show the overlay
        });

        // Close Pending Jobs Popup
        function closePendingJobsPopup() {
            pendingJobsPopup.classList.remove("active");
            overlay.classList.remove("active"); // Hide the overlay
        }

        // Close Pending Jobs Popup when clicking outside
        document.addEventListener("click", function (e) {
            if (
                !pendingJobsPopup.contains(e.target) &&
                !pendingJobsLink.contains(e.target)
            ) {
                pendingJobsPopup.classList.remove("active");
                overlay.classList.remove("active"); // Hide the overlay
            }
        });

        // Close Popup and Overlay when clicking on the overlay
        overlay.addEventListener("click", function () {
            pendingJobsPopup.classList.remove("active");
            overlay.classList.remove("active");
        });
    }
});