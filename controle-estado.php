<?php

function listaEstado($conexao) {
	$arrayEstado = array();
	$resultado = mysqli_query($conexao, "select * from estado;");
	while($estado = mysqli_fetch_assoc($resultado)) {
		array_push($arrayEstado, $estado);
	}
	return $arrayEstado;
}

function insereEstado($conexao, $nome, $sigla) {
	$queryInsere = "insert into estado (nome, sigla)
	values ('{$nome}', '{$sigla}')";
	return mysqli_query($conexao, $queryInsere);
}




?>