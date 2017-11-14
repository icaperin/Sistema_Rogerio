<?php
      include("conecta.php");
      include("controle-historico_operacao.php");
 ?>


<?php



if(insereHistorico($id_op, $id_funcionario, $data_historcio, $descricao_historico) { ?>

<?php } else {
    $msg = mysqli_error($conexao);
?>

<?php
}
?>
