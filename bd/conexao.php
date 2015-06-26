<?php

function db_connect()
{
   $conn = new mysqli('localhost', 'bb_user', 'bb_p@$$*!', 'biblionline'); 
   if (!$conn)
     throw new Exception('Could not connect to database server');
   else{
     return $conn;
   }
}
?>