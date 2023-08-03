// Function to add a new notification to the list
function addNotification(message, isNew) {
    const notificationList = document.getElementById('notification-list');

    // Create the notification element
    const notification = document.createElement('div');
    notification.classList.add('notification', isNew ? '' : 'old-notification');
    notification.innerHTML = `
        <p>${message}</p>
        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
    `;

    // Add event listener to the delete button
    const deleteBtn = notification.querySelector('.delete-btn');
    deleteBtn.addEventListener('click', function() {
        notification.remove();
    });

    // Add the notification to the list
    notificationList.prepend(notification);
}

// Sample notifications
addNotification("This is a new notification", true);
addNotification("This is an old notification", false);
addNotification("Another new notification", true);
alert(hi);