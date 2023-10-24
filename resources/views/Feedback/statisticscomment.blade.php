@extends('layouts.layout')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Assuming you have a PHP variable $commentsPerFeedback that contains the data
            var commentsData = <?php echo json_encode($commentsPerFeedback); ?>;
            
            // Convert PHP array to Google Chart data format
            var chartData = [['Feedback', 'Comments']].concat(Object.entries(commentsData));

            var data = google.visualization.arrayToDataTable(chartData);

            var options = {
                title: 'Number of Comments per Feedback'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
@endSection
