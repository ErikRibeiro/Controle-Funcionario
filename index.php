<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="utf-8">
</head>
<body>
    <div class="container">
      <div style="text-align: right;">
       <a href="cadastro.html" class="btn btn-sm btn-primary">Cadastrar</a>
     </div>
      <h3>Lista de funcionários</h3>
      <br>
		<table class="table table-striped">
  <thead>
    <tr>
      <th>Foto</th>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Cidade</th>
      <th>Bairro</th>
      <th>UF</th>
      <th>Telefone</th>
      <th>Ação</th>
    </tr>
  </thead>
      <?php
      include 'bd.php';
      $sql = "SELECT * FROM `funcionario`";
      $busca = mysqli_query($conexao,$sql);
      while ($array = mysqli_fetch_array($busca)) {
        $id = $array['id'];
        $foto = $array['foto'];
        $nome = $array['nome'];
        $endereco = $array['endereco'];
        $cidade = $array['cidade'];
        $bairro = $array['bairro'];
        $uf = $array['uf'];
        $telefone = $array['telefone'];
      ?>
    <tr>
      <td><img src="<?php echo "imagem$foto" ?>" style="width: 100px;"></td>
      <td><?php echo $nome ?></td>
      <td><?php echo $endereco ?></td>
      <td><?php echo $cidade ?></td>
      <td><?php echo $bairro ?></td>
      <td><?php echo $uf ?></td>
      <td><?php echo $telefone ?></td>
      <td>
        <a href="update.php?id=<?php echo $id ?>" class= "btn btn-sm btn-warning" style = "color: white">Editar</a>
        <a href="delete.php?id=<?php echo $id ?>" class= "btn btn-sm btn-danger" style = "color: white">Excluir</a>
      </td>
    </tr>
    <?php } ?>
</table>
</div>
</body>
</html>