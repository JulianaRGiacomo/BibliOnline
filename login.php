<?php
// Conexão com o banco de dados
require "banco.php";

// Inicia sessões
session_start("login");

// Recupera o login
$login = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;

// Recupera a senha, a criptografando em SHA1
$senha = isset($_POST["senha"]) ? sha1(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha){
	echo "Você deve digitar sua senha e login!";
	exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/

$SQL = "SELECT nome, email, senha, tipo
                       FROM Usuario
                       WHERE email = \"" . $login . "\"";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total){

	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = @mysql_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados["senha"])){
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
		$_SESSION["id_usuario"]= $dados["email"];
		$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
		$_SESSION["permissao"]= $dados["tipo"];
		if($_SESSION["permissao"]=="f")
			header("Location: funcionario/");
		else
			header("Location: usuario/");
		exit;
	}
	// Senha inválida
	else{
		echo "Senha inválida!";
		exit;
	}
}
// Login inválido
else{
	echo "O login fornecido por você é inexistente!";
	exit;
}
?>