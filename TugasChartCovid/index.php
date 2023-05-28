<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<style>
        .container{
            display: flex;
            justify-content: center;
        }
        .btn-group{
            margin-right: 25px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        </style>
</head>
<body>
	<h2 style = "text-align : center; margin-top: 15px;">Covid Data Analysis</h2>
	<div class ="container">
     <div class="btn-group">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Total Cases</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="tc_linechart.php">Line Chart</a>
        <a class="dropdown-item" href="tc_barchart.php">Bar Chart</a>
        <a class="dropdown-item" href="tc_piechart.php">Pie Chart</a>
        <a class="dropdown-item" href="tc_donatchart.php">Doughnut Chart</a>
      </div>
    </div>
    <div class="btn-group">
    <button class="btn btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Total Deaths</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="td_linechart.php">Line Chart</a>
        <a class="dropdown-item" href="td_barchart.php">Bar Chart</a>
        <a class="dropdown-item" href="td_piechart.php">Pie Chart</a>
        <a class="dropdown-item" href="td_donatchart.php">Doughnut Chart</a>
      </div>
    </div><div class="btn-group">
    <button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Total Recovered</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="tr_linechart.php">Line Chart</a>
        <a class="dropdown-item" href="tr_barchart.php">Bar Chart</a>
        <a class="dropdown-item" href="tr_piechart.php">Pie Chart</a>
        <a class="dropdown-item" href="tr_donatchart.php">Doughnut Chart</a>
      </div>
    </div><div class="btn-group">
    <button class="btn btn-outline-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active Cases</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="ac_linechart.php">Line Chart</a>
        <a class="dropdown-item" href="ac_barchart.php">Bar Chart</a>
        <a class="dropdown-item" href="ac_piechart.php">Pie Chart</a>
        <a class="dropdown-item" href="ac_donatchart.php">Doughnut Chart</a>
      </div>
    </div><div class="btn-group">
    <button class="btn btn-outline-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Total Tests</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="tt_linechart.php">Line Chart</a>
        <a class="dropdown-item" href="tt_barchart.php">Bar Chart</a>
        <a class="dropdown-item" href="tt_piechart.php">Pie Chart</a>
        <a class="dropdown-item" href="tt_donatchart.php">Doughnut Chart</a>
      </div>
    </div>
  <br>
  <br>   
</div>
  	
	<div class="alert alert-danger" role="alert">
Data Tahun 2022
</div>
</body>
</html>