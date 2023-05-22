<?php
include('koneksi1.php');
$label = ["India", "Japan", "S.Korea", "Turkey", "Vietnam", "Taiwan", "Iran", "Indonesia", "Malaysia", "Israel"];

for ($country = 1; $country < 11; $country++) {
    $query = mysqli_query($koneksi, "select total_cases from covid_data where id='$country'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['total_cases'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Grafik Covid - Bar Chart</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>

<body>
    <div style="width: 800px;height: 800px">
        <canvas id="myChart"></canvas>
    </div>


    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
                datasets: [{
                    label: 'Grafik Total Case Covid-19',
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>