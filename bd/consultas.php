<?php

//mudar aqui ->
$link = mysql_connect('localhost', 'root', '');

if (!$link){
    echo('Não foi possível conectar: ' . mysql_error());
    mysql_close($link);
}
else
	echo 'Conexão bem sucedida';
	
$db_selected = mysql_select_db('biblionline',$link);
if(!$db_selected)
    echo('Não foi possível conectar: ' . mysql_error());
else
    echo 'Conexão com bd .';
//<-até aqui

function pesquisaLivros($pesquisa){
    if(!$pesquisa){
        $tam = strlen($pesquisa);
        $query = sprintf("SELECT L.TITULO, L.AUTOR, S.DESC_STATUS FROM livro as L INNER JOIN status_livro as S ON L.COD_STATUS = S.COD_STATUS WHERE SUBSTRING(L.TITULO,1, $tam) = %s OR SUBSTRING(L.AUTOR,1, $tam) = %s ", mysql_real_escape_string($pesquisa), mysql_real_escape_string($pesquisa));
    }
    else
        $query = sprintf("SELECT L.TITULO, L.AUTOR, S.DESC_STATUS FROM livro as L INNER JOIN status_livro as S ON L.COD_STATUS = S.COD_STATUS");
    return mysql_query($quey);
}

function pesquisaUsuarios($pesquisa){
       if(!$pesquisa){
        $tam = strlen($pesquisa);
        $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.COD_STATUS = S.COD_STATUS WHERE SUBSTRING(U.NOME,1, $tam) = %s ", mysql_real_escape_string($pesquisa));
    }
    else
        $query = sprintf("SELECT U.CPF, U.NOME, S.DESC_STATUS FROM usuario as U INNER JOIN status_usuario as S ON U.STATUS = S.COD_STATUS");
    return mysql_query($quey);
}

function devolucaoExpirada(){
    $query = "SELECT U.NOME, L.TITULO, L.AUTOR, () as ATRASO FROM usuario as U INNER JOIN locacao as LC ON U.CPF = LC.CPF_USUARIO INNER JOIN livro as L ON LC.ISBN = L.ISBN WHERE LC.COD_STATUS = 1 AND ";
?>