<?php

function db_connect()
{
   $conn = new mysqli('localhost', 'bb_user', 'password', 'biblionline'); 
   if (!$conn)
     throw new Exception('Could not connect to database server');
   else{
     echo "Conexão bem sucedida!"  
     return $conn;
   }
}
?>