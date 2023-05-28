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
    <title>Total Deaths Bar Chart</title>
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
    <div id="canvas-holder">
        <canvas id="chart-area"></canvas>
    </div>
    <script>
   var ctx = document.getElementById("chart-area").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_produk); ?>,
				datasets: [{
					label: 'Total Deaths',
					data: <?php echo json_encode($jumlah_produk); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    </script>
</body>

</html>