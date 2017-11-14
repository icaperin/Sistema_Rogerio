<?php
      include("conecta.php");
      include("controle-historico_operacao.php");
 ?>


<?php

if(insereHistorico($conexao, $rua, $numero, $bairro, $complemento, $cep)) { ?>

<?php } else {
    $msg = mysqli_error($conexao);
?>

<?php
}
?>
