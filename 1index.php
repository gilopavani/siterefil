<?php
	include'conecta.php';
 
	$consulta = "SELECT * FROM os";

	$con = $link->query($consulta) or die ($link->error);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Tabela</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">




<nav class="nav">
    <button class="toggle-menu">
      <span></span>
	</button>
</nav>

<script>
window.onload = function() {
  var context = new AudioContext();
}
</script>

</head>

<audio src="./audio.mp3" autoplay></audio>

<body>

	<!--=========================Menu======================================================================-->
	
	<div id="menu" class="">
		<nav class="main-nav">
		  <ul>
			<li>
			  <a href="#">
				O.S. Aberta
			  </a>
			</li>
			<li>
			  <a href="./Inserir_OS/abriros.html">
				Abrir O.S.
			  </a>
			</li>
			
			<li>
			  <a href="#">
				Sair
			  </a>
			</li>
		  </ul>
		</nav>
	  </div>
	  <!--=======================================Menu========================================================-->
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					
					<div class="table">

						<div class="row header">
							<div class="cell">
								Nome Cliente
							</div>
							<div class="cell">
								O.S.
							</div>
							<div class="cell">
								Prévia
							</div>
							<div class="cell">
								Status
							</div>
							<div class="cell">
								Prioridade
							</div>
							<div class="cell">
								Fechamento
							</div>
						</div>

						<?php
						while($dados = $con->fetch_array()){
						?>
						
						
					
						<div class="row<?php echo $dados["color"];?>">
							<div class="cell" data-title="Full Name">
								<?php echo $dados["Nome"];?>
							</div>
							<div class="cell" data-title="Age">
								<?php echo $dados["numero_os"];?>
							</div>
							<div class="cell" data-title="Job Title">
								<?php echo $dados["status"];?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $dados["status"];?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $dados["color"];?>
							</div>
							<div class="cell">
								<button class="button-9" role="button">FECHAR OS</button>
							</div>
						</div>	

											
						<?php
						}
						?>

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>