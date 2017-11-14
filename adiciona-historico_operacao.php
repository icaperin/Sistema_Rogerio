<?php
      include("conecta.php");
      include("controle-historico_operacao.php");
 ?>


<?php
	$data_historico = $_POST["data_historico"];
	$descricao = $_POST["descricao"];


if(insereHistorico($conexao, $data_historico, $descricao)) { ?>

<?php } else {
    $msg = mysqli_error($conexao);
?>

<?php
}
?>
