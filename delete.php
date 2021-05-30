<?php
include "bd.php";
$id = $_GET['id'];
$sql = "DELETE FROM `funcionario` WHERE id = $id";
$deleta = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deleta</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container" style="width: 500px">
	<h1>Deletado com sucesso</h1>
	<center>
	<a href="index.php" class="btn btn-sm btn-success">Voltar</a>
	</center>
</div>
</body>
</html>