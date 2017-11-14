<?php 
      include("conecta.php");
      include("controle-endereco.php"); 
 ?>


<?php
	$rua = $_POST["rua"];
	$numero = $_POST["numero"];
	$bairro = $_POST["bairro"];
	$complemento = $_POST["complemento"];
	$cep = $_POST["cep"];


if(insereEndereco($conexao, $rua, $numero, $bairro, $complemento, $cep)) { ?>
    <p class="text-success">O Endereço <?= $rua; ?>, numero <?= $numero; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O Endereço <?= $rua; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

