
<?php 

class Componentes { 
//metodo
public function head() {
 	?>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Cartera Personal</title>
	    <link rel="icon" type="image/png" href="img/banking.png" />
	    <!-- Bootstrap Core CSS -->
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <link 
		rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
		crossorigin="anonymous">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/business-frontpage.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

	</head>

<?php } 
	public function javaScript(){ 
?>
		<script src="js/jquery.js"></script>

		<!--<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>-->

		<!-- Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Chart.js"></script>
		<script src="js/sweetalert.min.js"></script>

		<!-- -->
		<script src="js/CharCtrl.js"></script>
		<script src="js/Controller.js"></script>

		<!-- Administradores de pantallas -->
		<script src="js/AdminGastosCtrl.js"></script>
		<script src="js/AdminAhorrosCtrl.js"></script>
		<script src="js/AdminIngresosCtrl.js"></script>
		<script src="js/AdminUsuarioCtrl.js"></script>

<?php
	} 
} ?>