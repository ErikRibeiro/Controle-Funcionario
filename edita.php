<?php
include 'bd.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="container" style="width: 500px">
    <form enctype="multipart/form-data" action="updade.php" method="POST">
        <?php
        include 'bd.php';
        $sql = "SELECT * FROM `funcionario` WHERE id = $id";
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
            <img src="<?php echo "imagem$foto" ?>" style="width: 100px;"><br>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
            Nome: <input type="text" name="nome" class="form-control" value="<?php echo $nome ?>">
            Telefone: <input type="phone" name="telefone" class="form-control" value="<?php echo $telefone ?>">
            Endereço: <input type="text" name="endereco" class="form-control" value="<?php echo $endereco ?>">
            Bairro: <input type="text" name="bairro" class="form-control" value="<?php echo $bairro ?>">
            Cidade: <input type="text" name="cidade" class="form-control" value="<?php echo $cidade ?>">
            UF: <select name="uf" class="form-control">
                <option value="DF">DF</option>
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
            </select><br>
            <input type="submit" value="Cadastrar" class="btn btn-sm btn-success"/>
            <a href="index.php" class="btn btn-sm btn-primary">Voltar</a>
            <?php } ?>
    </form>
    </div>
</body>
</html>