document.addEventListener("DOMContentLoaded", function() {
function createNotificationElement(message) {
    const notificationElement = document.createElement("div");
    notificationElement.classList.add("notification");
    const contentElement = document.createElement("p");
    contentElement.textContent = message;
    contentElement.classList.add("notification-content");
    notificationElement.appendChild(contentElement);

    notificationElement.addEventListener("click", function() {
    if (!notificationElement.classList.contains("expanded")) {
        notificationElement.classList.add("expanded");
        notificationElement.appendChild(closeBtn);
    }
    });

    return notificationElement;
}

function addNotification(message) {
    const notificationList = document.getElementById("notification-list");
    const notificationElement = createNotificationElement(message);
    notificationList.prepend(notificationElement);
}

// Sample notifications
addNotification("This is a new notification. Click to see the full message.");
addNotification("This is an new notification. Click to see the full message.");
addNotification("Another new notification. Click to see the full message.");
addNotification("This is a new notification. Click to see the full message.");
addNotification("This is an new notification. Click to see the full message.");
addNotification("Another new notification. Click to see the full message.");
addNotification("This is a new notification. Click to see the full message.");
addNotification("This is an new notification. Click to see the full message.");
addNotification("Another new notification. Click to see the full message.");

const closeBtn = document.createElement("button");
closeBtn.classList.add("btn", "btn-danger", "btn-sm", "close-btn");
closeBtn.textContent = "Close";
closeBtn.addEventListener("click", function(event) {
    event.stopPropagation();
    const notificationElement = event.target.closest(".notification");
    notificationElement.classList.remove("expanded");
    closeBtn.remove();
});
});
