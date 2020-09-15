<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>daet</title>
        <link rel="stylesheet" href="date.css" />
        <link rel="stylesheet" href="all.css" />
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.css' rel='stylesheet' />
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js'></script>
        <script>
        
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'timeGridWeek',
                    selectable: true,
                    dateClick: function(info) {
                        document.getElementById('date_start').value = info.dateStr;
                    }
                });
                calendar.render();
            });

        </script>
    </head>
    <body>
        <header>header</header>
        <main>
            <div id='calendar'></div>
            <div class="date">
                <form action="/check" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="date_start" value="" id="date_start" name="date_start">
                    <input type="submit" value="next">
                </form>
            </div>
        </main>
        <footer>footer</footer>
    </body>
</html>
