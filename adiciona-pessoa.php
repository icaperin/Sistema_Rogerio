<?php 
      include("conecta.php");
      include("controle-pessoa.php"); 
 ?>


<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$nivel = $_POST["nivel"];
	$rg_ie = $_POST["rg_ie"];
	$cpf_cnpj = $_POST["cpf_cnpj"];
	$data_cadastro = $_POST["data_cadastro"];
	$data_fim = $_POST["data_fim"];
	$usuario_exclusao = $_POST["usuario_exclusao"];
	$telefone = $_POST["telefone"];
	$celular = $_POST["celular"];
	$id_estado = $_POST["id_estado"];
	$id_endereco = $_POST["id_endereco"];
	


if(inserePessoa($conexao, $nome, $email, $senha, $nivel, $rg_ie, $cpf_cnpj, $data_cadastro, $data_fim, $usuario_exclusao, $telefone, $celular, $id_estado, $id_endereco)) { ?>

    <p class="text-success">Nome: <?= $nome; ?> inserido(a) com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Nome: <?= $nome; ?> não foi cadastrado(a): <?= $msg ?></p>
<?php
}
?>

