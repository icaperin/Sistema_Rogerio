<?php

function inserePessoa($conexao, $nome, $email, $senha, $nivel, $rg_ie, $cpf_cnpj, $data_cadastro, $data_fim, $usuario_exclusao, $telefone, $celular, $id_estado, $id_endereco) {

	$queryInsere = "insert into pessoa (nome, email, senha, nivel, rg_ie, cpf_cnpj, data_cadastro, data_fim, usuario_exclusao, telefone, celular, id_estado, id_endereco)
	values ('{$nome}', '{$email}', '{$senha}', {$nivel}, '{$rg_ie}' ,'{$cpf_cnpj}', '{$data_cadastro}', '{$data_fim}', {$usuario_exclusao}, '{$telefone}', '{$celular}', {$id_estado}, {$id_endereco})";
	return mysqli_query($conexao, $queryInsere);
}

function listaPessoa($conexao) {
	$arrayPessoa = array();
	$resultado = mysqli_query($conexao, "select * from pessoa;");
	while($pessoa = mysqli_fetch_assoc($resultado)) {
		array_push($arrayPessoa, $pessoa);
	}
	return $arrayPessoa;
}
?>