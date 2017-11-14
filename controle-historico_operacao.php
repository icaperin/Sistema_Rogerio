<?php

function insereOpHistorico($conexao, $id_op, $id_funcionario, $data_historcio, $descricao_historico) {
	$queryInsereHistorico = "insert into historico (funcionario_id_funcionario, operacao_id_operacao, data_historico, descricao)
  values ('{$id_funcionario}', '{$id_op}', '{$data_historcio}', '{$descricao_historico}')";
	mysqli_query($conexao, $queryInsereHistorico);
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
