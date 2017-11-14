<?php
      include("conecta.php");
      include("controle-historico_operacao.php");
 ?>


<?php



if(insereHistorico($conexao, $data_historico, $descricao)) { ?>

<?php } else {
    $msg = mysqli_error($conexao);
?>

<?php
}
?>
