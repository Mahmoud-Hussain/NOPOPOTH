document.addEventListener("DOMContentLoaded", function () {
    const sidenav = document.getElementById("mySidenav");
    const mainContent = document.getElementById("main");
    const navbar = document.querySelector(".navbar");
    const overlay = document.createElement("div");
    overlay.className = "overlay";
    document.body.appendChild(overlay);
  
    // Open Sidebar
    document.querySelector(".menu-icon").addEventListener("click", () => {
      sidenav.style.width = "250px";
      mainContent.classList.add("shifted");
      navbar.classList.add("shifted");
      overlay.classList.add("active");
    });
  
    // Close Sidebar
    document.querySelector(".sidenav .closebtn").addEventListener("click", () => {
      sidenav.style.width = "0";
      mainContent.classList.remove("shifted");
      navbar.classList.remove("shifted");
      overlay.classList.remove("active");
    });
  
    // Close Sidebar on Overlay Click
    overlay.addEventListener("click", () => {
      sidenav.style.width = "0";
      mainContent.classList.remove("shifted");
      navbar.classList.remove("shifted");
      overlay.classList.remove("active");
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
  
    // Expand/Collapse Messages Section
    const messagesSection = document.querySelector(".messages");
    const messageItems = document.querySelectorAll(".message-item");
    const dashboardSearchContainer = document.querySelector(
      ".dashboard-search-container"
    );
    const popularJobs = document.querySelector(".popular-jobs");
    const reviewsSection = document.querySelector(".reviews");
    const reviewItems = document.querySelectorAll(".review-item");
  
    // Create close button for messages
    const messagesCloseBtn = document.createElement("span");
    messagesCloseBtn.className = "close-btn";
    messagesCloseBtn.innerHTML = '<i class="fas fa-times"></i>';
    messagesSection.appendChild(messagesCloseBtn);
  
    // Create close button for reviews
    const reviewsCloseBtn = document.createElement("span");
    reviewsCloseBtn.className = "close-btn";
    reviewsCloseBtn.innerHTML = '<i class="fas fa-times"></i>';
    reviewsSection.appendChild(reviewsCloseBtn);
  
    const notificationIcon = document.querySelector(".navbar .icon");
    const notificationPopup = document.getElementById("notificationPopup");
  
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
  
    // Message input bar
    const messageInputBar = document.createElement("div");
    messageInputBar.className = "message-input-bar";
    messageInputBar.innerHTML = `
          <input type="text" placeholder="Type your message...">
          <button><i class="fas fa-paper-plane"></i></button>
      `;
    messagesSection.appendChild(messageInputBar);
  
    // Review input bar
    const reviewInputBar = document.createElement("div");
    reviewInputBar.className = "review-input-bar";
    reviewInputBar.innerHTML = `
          <input type="text" placeholder="Type your review...">
          <button><i class="fas fa-paper-plane"></i></button>
      `;
    reviewsSection.appendChild(reviewInputBar);
  
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
  });