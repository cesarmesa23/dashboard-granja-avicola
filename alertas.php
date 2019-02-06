<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	

<style type="text/css">

.modal-header-danger {
	color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #d9534f;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}

.modal-header-primary {
	color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #428bca;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
</style>
<?php

function alertaLogin(){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-danger">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h2 class="modal-title"><strong> Error!</strong></h2>
					</div>
	      			<div class="modal-body">
	        			<p><strong>Usuario o Contraseña incorrectos.</strong> Por favor verifique los datos ingresados.</p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}

function alertaLoginDesac($msj){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-danger">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h2 class="modal-title"><strong> Error!</strong></h2>
					</div>
	      			<div class="modal-body">
	        			<p><strong>'.$msj.'</strong></p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}

function alertaError($msj){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-danger">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h2 class="modal-title"><strong> Error!</strong></h2>
					</div>
	      			<div class="modal-body">
	        			<p><strong>'.$msj.'</strong> Por favor verifique los datos ingresados.</p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}


function alertaRegistroUsuario($msj){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-primary">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h1 class="modal-title"><span class="glyphicon glyphicon-info-sign fa-lg" aria-hidden="true"></span></h1>
					</div>
	      			<div class="modal-body">
	        			<p><strong>'.$msj.'</strong></p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

		$("#myModal").on("hidden.bs.modal", function (e) {
		  window.location="login-user.php";
		});

	</script>';
}

function alertaRegistroCodigo($empresa,$totalPuntos){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-primary">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h1 class="modal-title"><span class="glyphicon glyphicon-thumbs-up fa-lg" aria-hidden="true"></span> Se registró el código</h1>
					</div>
	      			<div class="modal-body">
	      				<h1>Gracias por visitar '.$empresa.'</h1>
						<h2>Tienes '.$totalPuntos.' puntos acumulados.</h2>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}

function alertaConsultaPuntos($user,$empresa,$totalPuntos){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-primary">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h1 class="modal-title"><span class="glyphicon glyphicon-user fa-lg" aria-hidden="true"></span></h1>
					</div>
	      			<div class="modal-body">
	      				<h1>'.$user.'</h1>
						<h2>Tienes '.$totalPuntos.' puntos acumulados en '.$empresa.'</h2>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}

function alertaGenerarCodigo($msj){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-primary">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h1 class="modal-title"><span class="glyphicon glyphicon-info-sign fa-lg" aria-hidden="true"></span></h1>
					</div>
	      			<div class="modal-body">
	        			<p><strong>'.$msj.'</strong></p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

	</script>';
}

function alertaPDFgenerado($msj){

	echo	'<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header modal-header-primary">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	        			<h1 class="modal-title"><span class="glyphicon glyphicon-info-sign fa-lg" aria-hidden="true"></span></h1>
					</div>
	      			<div class="modal-body">
	        			<p><strong>'.$msj.'</strong></p>
	      			</div>
				</div>
				</div>
		</div>			

		';	

	echo'
	<script type="text/javascript">

		$("#myModal").modal("show");

		$("#myModal").on("hidden.bs.modal", function (e) {
		  window.location="generador_codigos.php";
		});

	</script>';
}

?>




