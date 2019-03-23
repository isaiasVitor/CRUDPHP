<?php
require_once('../config.php');	
require_once(DBAPI);	

function relatorioTotalPorCongregacao(){
    $database = open_database();
    $found = null;		
  
    $sql = "select count(id) as total, congregacao from alunos group by congregacao;";
  
    try{
      $result = $database->query($sql);		    		    
      if ($result->num_rows > 0) {		      
          $found = $result->fetch_assoc();	
     }
    }catch(Exception $e){
      
      $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
      $_SESSION['type'] = 'danger';
    }
    close_database($database);
    var_dump( json_encode($found));
  }

?>