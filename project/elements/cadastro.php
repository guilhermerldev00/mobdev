<?php

require_once "class/Cliente.php";
$objCliente = new Cliente();

if (isset($_POST['enviarDados'])) {
	if ($objCliente->queryInsert($_POST) == "ok") {
		header("Location: /mobdev/project/index.php");
		
	} else {
		echo '<script type="text/javascript">alert("Por favor, preencha os campos corretamente");</script>';
	}
}

?>