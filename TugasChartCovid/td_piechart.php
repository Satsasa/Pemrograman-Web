<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from tb_covid19");
while ($row = mysqli_fetch_array($data)) {
    $nama_produk[] = $row['negara'];

    $query = mysqli_query($koneksi, "select totaldeaths from tb_covid19 where id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['totaldeaths'];
}
?>
<!doctype html>
<html>

<head>
    <title>Total Deaths Pie Chart</title>
    <script type="text/javascript" src="Chart.js"></script>
    <style>
    #canvas-holder {
        display: flex;
        justify-content: center;
        /* Horizontally center */
        align-items: center;
        /* Vertically center */
        width: 100%;
        height: 100%;
        /* Adjust the height as needed */
    }
    </style>
</head>

<body>
<h1 style = "text-align: center;">Total Deaths</h1>
    <div id="canvas-holder">
        <canvas id="chart-area"></canvas>
    </div>
    <script>
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: <?php echo json_encode($jumlah_produk); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 255, 0.2)',
                    'rgba(54, 162, 64, 0.2)',
                    'rgba(255, 206, 153, 0.2)',
                    'rgba(75, 192, 128, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 255, 1)',
                    'rgba(54, 162, 64, 1)',
                    'rgba(255, 206, 153, 1)',
                    'rgba(75, 192, 128, 1)'
                ],
                label: 'Total Deaths'
            }],
            labels: <?php echo json_encode($nama_produk); ?>
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });
        });

        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });
    </script>
</body>

</html>