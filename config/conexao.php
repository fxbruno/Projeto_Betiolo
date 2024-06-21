<?php
	$servidor = "localhost";
	$usuario = "glpi";
	//$senha = "";//AMBIENTE DE PRODUÇÃO
	$senha = "Segur@135$";//AMBIENTE DE DESENVOLVIMENTO
	$dbname = "Betiolo";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>


