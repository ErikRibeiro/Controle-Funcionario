<?php
include 'bd.php';
$id = $_POST['id'];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$sql = "UPDATE `funcionario` SET `nome`='$nome',`telefone`= '$telefone',`endereco`='$endereco',`bairro`='$bairro',`cidade`='$cidade',`uf`='$uf' WHERE id = $id";
$edita = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deleta</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container" style="width: 500px">
	<h1>Editado com sucesso</h1>
	<center>
	<a href="index.php" class="btn btn-sm btn-success">Voltar</a>
	</center>
</div>
</body>
</html>