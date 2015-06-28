<?php
require_once('conexão.php');

//Função para verificar se email e senha do usuario estão corretos
function verifica_login($email, $senha){
    $conn = db_connect();
    
    $email = $conn->real_escape_string($email);
    $senha = $conn->real_escape_string($senha);
    $query = "SELECT EMAIL, SENHA FROM usuario WHERE EMAIL = $email AND SENHA = $senha"
    $result = $conn->query($query);
    
    if(!$result)
        return false;
    if($result->num_rows > 0)
        return true;
    else
        return false;    
}

//Função para logar e retornar as informações principal para o login
function login($email, $senha){
    
    if(verifica_login($email, $senha)){
        $conn = db_connect();
        $email =  = $conn->real_escape_string($email);
        $query =  "SELECT TIPO, CPF, APELIDO FROM usuario WHERE EMAIL = $email";

        return = $conn->query($query);
        }
    
}

//Função para a consulta de livros 
function pesquisaLivros($pesquisa){
    $conn = db_connect();
    $pesquisa =  $conn->real_escape_string($pesquisa);
    if($pesquisa){
        $query = "SELECT L.TI
        TULO, L.AUTOR, S.DESC_STATUS FROM livro as L INNER JOIN status_livro as S ON L.COD_STATUS = S.COD_STATUS WHERE L.ISBN = $pesquisa";
        if($conn->query($query))
            return $conn->query($query);
        else
            $query = "SELECT L.TITULO, L.AUTOR, S.DESC_STATUS FROM livro as L INNER JOIN status_livro as S ON L.COD_STATUS = S.COD_STATUS WHERE L.TITULO LIKE %$pesquisa% OR L.AUTOR LIKE %$pesquisa% OR L.SUBTITULO LIKE %$pesquisa% OR L.GENERO LIKE %$pesquisa%";
    }
    else
        $query = sprintf("SELECT L.TITULO, L.AUTOR, S.DESC_STATUS FROM livro as L INNER JOIN status_livro as S ON L.COD_STATUS = S.COD_STATUS");
    return $conn->query($query);
}


//Funçao pra buscar Usuários
function pesquisaUsuarios($pesquisa){
    $conn = db_connect();
    $pesquisa =  $conn->real_escape_string($pesquisa);
    if($pesquisa){
        $query = "SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.COD_STATUS = S.COD_STATUS WHERE U.CPF = $pesquisa";
        if($conn->query($query))
            return $conn->query($query);
        else
            $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.COD_STATUS = S.COD_STATUS WHERE U.NOME LIKE %$pesquisa% ";
    }
    else
        $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.STATUS = S.COD_STATUS");
    return $conn->query($query);
}


//Função para listar usuário com débito
function devolucaoExpirada(){
    $conn = db_connect();
    $query = "SELECT DISTINCT U.NOME, L.TITULO, L.AUTOR,  datediff(now(),LC.DATA) as ATRASO FROM usuario as U INNER JOIN locacao as LC ON U.CPF = LC.CPF_USUARIO INNER JOIN livro as L ON LC.ISBN = L.ISBN, configuracoes AS C WHERE LC.COD_STATUS = 1 AND datediff(now(),LC.DATA) > C.TEMPO_ATRASO ORDER BY ATRASO DESC";
    
    return $conn->query($query);

}

//Função para informações em configurações
function campos_config($cpf){
    $conn = db_connect();
    $query = "SELECT APELIDO, EMAIL, TELEFONE FROM USUARIO WHERE CPF = $cpf";
    
    return $conn->query($query); 
}

//Função para listar devoluções
function devolucoes(){
    $conn = db_connect();
    $query = "SELECT U.NOME, L.TITULO, U.NOME, D.DATA_DEVOLUCAO FROM usuario as U INNER JOIN devolucao as D ON U.CPF = D.CPF_USUARIO INNER JOIN livro as L ON D.ISBN = L.ISBN ORDER BY D.DATA_DEVOLUCAO DESC ";

    return $conn->query($query);
}
                             
//Função para listar locações
function locacoes(){
$conn = db_connect();
    $query = "SELECT U.NOME, U.CPF, L.TITULO, L.AUTOR, L.ISBN, U.NOME, LC.DATA FROM usuario as U INNER JOIN locacao as LC ON U.CPF = LC.CPF_USUARIO INNER JOIN livro as L ON LC.ISBN = L.ISBN ORDER BY LC.DATA DESC";

    return $conn->query($query);
}
                             
//Função para listar o histórico do usuário
function historico_usuario($cpf){
    $conn = db_connect();
    
    
}
?>
