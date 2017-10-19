<?php
//include("conf/Conexion.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" type="text/css" href="fonts/MaterialDesign/css/materialdesignicons.min.css" media="all"  />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/dropzone.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.css"  media="all"/>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<title>Tarea </title>
    </head>
	<script src="js/Jquery-3.2.1.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/dropzone.js"></script>
    <body>
		<div class="row" style="margin-bottom: 5px;">
			<div class="col-md-12 card-panel center-align blue" style="margin-top: 0px">
				<h3 class="white-text"><i class="fa fa-lg mdi mdi-file-document"></i> Subir Archivo</h3>
			</div>
			<div class="container">
				<div class="col-md-12 center-align">
					<form class="card-panel dropzone" action="subirArchivo.php" id="myDropzone">
						<h4 class="dz-message"><i class="mdi mdi-file-plus"></i><br> Haz click o arrastra tu archivo aquí</h4>
					</form>
					<button class="btn blue hide waves-effect waves-light" id="send"><i class="mdi mdi-upload"></i> Subir</button>
				</div>
			</div>			
		</div>
		<div class="divider" style="margin-top: 5px"></div>
		<div class="row">
			<h5 class="center-align"><i class="mdi mdi-format-list-bulleted"></i> Lista</h5>
			<div class="col-md-12" id="lista">
				
			</div>
		</div>
    </body>
	<script src="js/scriptsjava.js"></script>
</html>