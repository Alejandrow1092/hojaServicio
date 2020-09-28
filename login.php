<?php

include('conBD.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Inicio de sesion</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="viewport" content="widht=device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        
        <!--Enlace al archivo css-->
        <link href="static/css/index.css" type="text/css"
                rel="stylesheet" /> 

         <!--JQUERY
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         -->
         <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
         <scrypt src="bootstrap/js/bootstrap.min.js"> </scrypt>   

        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        -->

        <!--bootstrap-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    </head>
    <body>
<?php
if(isset($_POST["user"]) && isset($_POST["password"]) && isset($_POST["log"])){
	$consulta = $connection->prepare("SELECT correoU, contrasena FROM usuario WHERE correoU = :user");
	$consulta->bindParam("user", $_POST["user"], PDO::PARAM_STR);
	$consulta->execute();

	if($consulta->rowCount() != 0){
		$resultado = $consulta->fetch(PDO::FETCH_ASSOC);
		if (password_verify($_POST["password"], $resultado["contrasena"])) {
			session_start();
			header("Location: inicio.php");
		} else{
?>
    	<div class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Error</h5>
						<button type="button" onclick="window.location.replace('index.php');" class="close" data-dismiss="modal" aria-label="Close">
			  				<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>La contraseña incorrecta, por favor intentelo de nuevo.</p>
					</div>
					<div class="modal-footer">
						<button type="button" onclick="window.location.replace('index.php');" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
    
<?php
		}
	} else{
?>
		<div class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Error</h5>
						<button type="button" onclick="window.location.replace('index.php');" class="close" data-dismiss="modal" aria-label="Close">
			  				<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>No existe la dirección de correo eléctronico ingresada, por favor intente de nuevo.</p>
					</div>
					<div class="modal-footer">
						<button type="button" onclick="window.location.replace('index.php');" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
<?php
	}
}
?>

	</body>
</html>