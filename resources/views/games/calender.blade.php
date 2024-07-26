<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>試合カレンダー</title>
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.1/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.1/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.10.1/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@5.10.1/main.min.js'></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #calendar {
            max-width: 800px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                dateClick: function(info) {
                    var date = info.dateStr;
                    // 日付をクリックした際の処理
                    // 例：モーダルウィンドウを表示して試合の日程を入力する
                    alert('Selected date: ' + date);
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>