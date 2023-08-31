<head>

	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>

    <title>Huzza    </title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <style type ="text/css">
        .brand{
            background: #07d2f0 !important;
        }
        .brand-text{
            color: #07d2f0 !important;
        }
form{
    max-width: 460px;
    margin: 20px auto;
    padding: 20px; 
}
      </style>
</head>
<body class="blue">
<div class="container">
		
		<?php 
			require 'add.php';
			$edu = new add;
			$coll = $add->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
    <nav class="white z-depth-0">
<div calss="container">
    <a href="#" class="brand-logo brand-text center">Astrolegy</a>
    <ul id="nav-moblie" class="right hide-on-small-down">
        <li><a href="#" class="btn brand z-depth-0">add info</a></li>
</div>
</nav>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key={your api key}&callback=loadMap">
</script>