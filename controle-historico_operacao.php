<?php

function insereHistorico($conexao, $rua, $numero, $bairro, $complemento, $cep) {
	$queryInsereHistorico = "insert into historico (data_historico, descricao)
	values ('{$data_historico}', '{$descricao}')";
	return mysqli_query($conexao, $queryInsereHistorico);
}

function listaHistorico($conexao) {
	$arrayHistorico = array();
	$resultado = mysqli_query($conexao, "select * from historico");
	while($historico = mysqli_fetch_assoc($resultado)) {
		array_push($arrayHistorico, $historico);
	}
	return $arrayHistorico;
}


?>
