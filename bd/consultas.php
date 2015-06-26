<?php
require_once('db_fns.php');

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
    if(!$pesquisa){
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
    if(!$pesquisa){
        $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.COD_STATUS = S.COD_STATUS WHERE U.NOME LIKE %$pesquisa% ";
    }
    else
        $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.STATUS = S.COD_STATUS");
    return $conn->query($quey);
}


//Função para listar usuário com débito
function devolucaoExpirada(){
    $conn = db_connect();
    $query = "SELECT DISTINCT U.NOME, L.TITULO, L.AUTOR,  datediff(now(),LC.DATA) as ATRASO FROM usuario as U INNER JOIN locacao as LC ON U.CPF = LC.CPF_USUARIO INNER JOIN livro as L ON LC.ISBN = L.ISBN, configuracoes AS C WHERE LC.COD_STATUS = 1 AND datediff(now(),LC.DATA) > C.TEMPO_ATRASO ORDER BY ATRASO DESC";

}
?>