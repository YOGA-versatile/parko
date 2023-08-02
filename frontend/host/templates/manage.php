<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/manage.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class='calendar'>
    <div class='calendar_left'>
      <div class='header'>
        <i class='material-icons' id="prev-btn">navigate_before</i>
        <h1 id="month-name">Month</h1>
        <i class='material-icons' id="next-btn">navigate_next</i>
      </div>
      <div class='days'>
        <div class='day_item'>Mon</div>
        <div class='day_item'>Tue</div>
        <div class='day_item'>Wed</div>
        <div class='day_item'>Thu</div>
        <div class='day_item'>Fri</div>
        <div class='day_item'>Sat</div>
        <div class='day_item'>Sun</div>
      </div>
      <div class='dates'></div>
    </div>
    <div class='calendar_right'>
      <div class='list'>
        <ul id="event-list">
        </ul>
      </div>
      <form id="add-event-form">
        <input id="event-description" placeholder='Enter a task for this day' type='text'>
        <select id="event-type" placeholder='Type'>
          <option value='Social'>Social</option>
          <option value='Work'>Work</option>
        </select>
      </form>
    </div>
  </div>

  <script src="js/manage.js"></script>
</body>

</html>
