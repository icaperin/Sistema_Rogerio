<?php 
      include("conecta.php");
      include("controle-estado.php"); 
 ?>


<?php
	$nome = $_POST["nome"];
	$sigla = $_POST["sigla"];


if(insereEstado($conexao, $nome, $sigla)) { ?>
    <p class="text-success">O Estado <?= $nome; ?>, <?= $sigla; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O Estado <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

