<?php

function insereEndereco($conexao, $rua, $numero, $bairro, $complemento, $cep) {
	$queryInsereEndereco = "insert into endereco (rua, numero, bairro, complemento, cep)
	values ('{$rua}', '{$numero}', '{$bairro}', '{$complemento}', '{$cep}')";
	return mysqli_query($conexao, $queryInsereEndereco);
}

function listaEndereco($conexao) {
	$arrayEndereco = array();
	$resultado = mysqli_query($conexao, "select * from endereco");
	while($endereco = mysqli_fetch_assoc($resultado)) {
		array_push($arrayEndereco, $endereco);
	}
	return $arrayEndereco;
}


?>