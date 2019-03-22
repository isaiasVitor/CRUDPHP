<?php 

require_once('../config.php');	
require_once(DBAPI);


    $database = open_database();
  
    $sql = "select count(id) as total from alunos";
  
    try{
     $result = $database->query($sql);
     $row = mysqli_fetch_assoc($result);
     $frase = $row;

     echo json_encode($frase);
    }catch(Exception $e){
      
      $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
      $_SESSION['type'] = 'danger';
    }
    close_database($database);
  
   
  

