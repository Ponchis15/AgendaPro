<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DecoRom - Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/main.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ffdee9, #b5fffc);
      min-height: 100vh;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .fc-daygrid-day.fc-day-available {
      background-color: #d0ffd0;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold text-dark">Panel de DecoRom</h1>
      <p class="lead">Visualización de citas y disponibilidad</p>
    </div>

    <div class="card p-4 mb-4">
      <h4 class="mb-3">Citas activas</h4>
      <ul class="list-group" id="listaCitasResumen">
        <li class="list-group-item">No hay citas agendadas aún.</li>
      </ul>
    </div>

    <div class="card p-4">
      <h4 class="mb-3">Fechas disponibles</h4>
      <div id='calendario'></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>

  <script>
    const citas = [];
    const listaCitasResumen = document.getElementById('listaCitasResumen');
    let calendar;

    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendario');
      calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 500,
        locale: 'es',
        events: [],
        eventColor: '#e91e63',
        eventTextColor: '#fff',
        datesSet: highlightAvailableDates
      });
      calendar.render();
    });

    function highlightAvailableDates(info) {
      setTimeout(() => {
        const allDays = document.querySelectorAll('.fc-daygrid-day');
        allDays.forEach(day => {
          const date = day.getAttribute('data-date');
          const isOccupied = citas.some(cita => cita.fecha === date);
          if (!isOccupied) {
            day.classList.add('fc-day-available');
          } else {
            day.classList.remove('fc-day-available');
          }
        });
      }, 10);
    }
  </script>
</body>

</html>
