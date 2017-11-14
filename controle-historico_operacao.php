<?php
function insereHistorico($id_op, $id_funcionario, $data_historcio, $descricao_historico) {

try {
  $dbh = new PDO('localhost', 'root', '', 'bd_estoque',
      array(PDO::ATTR_PERSISTENT => true));
  echo "conectado\n";
} catch (Exception $e) {
  die("Não foi possivel conectar " . $e->getMessage());
}

try {
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $dbh->beginTransaction();
  $dbh->exec("insert into historico (funcionario_id_funcionario, operacao_id_operacao, data_historico, descricao)");
  $dbh->commit();

} catch (Exception $e) {
  $dbh->rollBack();
  echo "Falha ao salvar os dados: " . $e->getMessage();
}

}


function listaHistorico($conexao) {
	$arrayHistorico = array();
	$resultado = mysqli_query($conexao, "select * from historico join operacao on operacao.id_operacao = historico.operacao_id_operacao where id > 0");
	while($historico = mysqli_fetch_assoc($resultado)) {
		array_push($arrayHistorico, $historico);
	}
	return $arrayHistorico;
}


?>
