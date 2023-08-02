window.addEventListener("load", function () {
const months = [
    "January", "February", "March", "April", "May", "June", "July", "August",
    "September", "October", "November", "December"
];

const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const monthName = document.getElementById("month-name");
const dateContainer = document.querySelector(".dates");
const eventList = document.getElementById("event-list");
const addEventForm = document.getElementById("add-event-form");
const eventDescription = document.getElementById("event-description");
const eventType = document.getElementById("event-type");

let currentDate = new Date();
let currentYear = currentDate.getFullYear();
let currentMonth = currentDate.getMonth();
let currentDay = currentDate.getDate();

// Event listeners for prev and next buttons
prevBtn.addEventListener("click", prev);
nextBtn.addEventListener("click", next);

// Initialize the calendar
renderCalendar(currentYear, currentMonth);

function prev() {
    if (currentMonth > 0) {
    currentMonth--;
    } else {
    currentYear--;
    currentMonth = 11;
    }
    renderCalendar(currentYear, currentMonth);
}

function next() {
    if (currentMonth < 11) {
    currentMonth++;
    } else {
    currentYear++;
    currentMonth = 0;
    }
    renderCalendar(currentYear, currentMonth);
}

function renderCalendar(year, month) {
    monthName.innerText = months[month] + " " + year;
    dateContainer.innerHTML = "";

    const firstDayOfMonth = new Date(year, month, 1);
    const lastDayOfMonth = new Date(year, month + 1, 0);
    const numDays = lastDayOfMonth.getDate();

    for (let i = 1; i <= numDays; i++) {
        const dateItem = document.createElement("div");
        dateItem.classList.add("date_item");
        dateItem.textContent = i;
        dateContainer.appendChild(dateItem);

    if (i === currentDay && year === currentYear && month === currentMonth) {
        dateItem.classList.add("present");
    } else if (year < currentYear || (year === currentYear && month < currentMonth) ||
                (year === currentYear && month === currentMonth && i < currentDay)) {
        dateItem.classList.add("past");
    } else {
        dateItem.classList.add("future");
    }

    dateItem.addEventListener("click", function () {
        currentDay = i;
        updateEventList(year, month, i);
        dateContainer.querySelectorAll(".date_item").forEach(item => item.classList.remove("present"));
        dateItem.classList.add("present");
    });
    }

    updateEventList(year, month, currentDay);
}

function updateEventList(year, month, day) {
    eventList.innerHTML = "";
    const events = getEvents(year, month, day);
    events.forEach(event => {
    const li = document.createElement("li");
    li.textContent = `It's a ${event.type} thing - ${event.description}`;
    eventList.appendChild(li);
    });
}

function getEvents(year, month, day) {
    const id = day.toString() + month.toString();
    return events.filter(event => event.id === id);
}

let events = [];

addEventForm.addEventListener("submit", function (event) {
    event.preventDefault();
    const description = eventDescription.value.trim();
    if (description === "") return;

    const id = currentDay.toString() + currentMonth.toString();
    const type = eventType.value;
    events.push({
    id: id,
    description: description,
    type: type
    });

    updateEventList(currentYear, currentMonth, currentDay);
    eventDescription.value = "";
});
});
