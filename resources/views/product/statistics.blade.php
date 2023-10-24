@extends('layouts.layout')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
@section('content')
    <!-- Basic Horizontal form layout section start -->
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
   <div id="donutchart" style="width: 100%; height: 300px;"></div>

   <div id="artistChart" style="width: 100%; height: 300px;"></div>


<script type="text/javascript">

    google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Catalog");
    data.addColumn("number", "Products");

    // Pass the productsPerCatalog data from Laravel to JavaScript
    var catalogData = @json($productsPerCatalog);

    // Transform the catalogData into an array of arrays
    var chartData = Object.entries(catalogData).map(([catalog, count]) => [catalog, count]);

    data.addRows(chartData);
    var customColors = [
            "#FFC0CB", // Pastel Pink
            "#ADD8E6", // Light Blue
            "#FFD700", // Gold
            "#98FB98", // Pale Green
            // Add more colors as needed
        ];

        var options = {
            title: "Arts per Catalog",
            pieHole: 0.4,
            colors: customColors, // Set custom colors
        };

        var chart = new google.visualization.PieChart(document.getElementById("donutchart"));
        chart.draw(data, options);
}



</script>
<!-- Your HTML and previous code here -->
<script type="text/javascript">

google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        // Create a bar chart for statistics by artist
        var artistData = new google.visualization.DataTable();
        artistData.addColumn("string", "Artist");
        artistData.addColumn("number", "Count");

        var artistChartArray = @json($productsByArtist);

        // Transform the data into an array of arrays and ensure values are integers
        var artistChartData = Object.entries(artistChartArray).map(([artist, count]) => [artist, parseInt(count)]);

        artistData.addRows(artistChartData);

        var artistOptions = {
                title: "Arts per Artist",
                bars: "horizontal",
                legend: { position: "none" },
                hAxis: { format: '0' } // Display integers on the horizontal axis
            };

            // Define custom colors for each bar
            var customColors = [ "#87CEEB"];
            artistOptions.colors = customColors;

            var artistChart = new google.visualization.BarChart(document.getElementById("artistChart"));
            artistChart.draw(artistData, artistOptions);
                }
</script>

</html>
@endSection