<?php
include 'bd.php';
$uploaddir = 'C:\xampp\htdocs\arquivo\imagem';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$file = basename($_FILES['userfile']['name']);
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
    $sql = "INSERT INTO `funcionario`(`foto`, `nome`, `telefone`, `endereco`, `bairro`, `cidade`, `uf`) VALUES ('$file','$nome','$telefone','$endereco','$bairro','$cidade','$uf')";
    $inserir = mysqli_query($conexao,$sql);
} else {
    echo "Possível ataque de upload de arquivo!\n";
}
print "</pre>";
echo "imagem$file" . "<br/>";
?>
<img src="<?php echo "imagem$file" ?>" style="width: 100px;">