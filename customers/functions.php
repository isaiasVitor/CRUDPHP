<?php		
require_once('../config.php');	
require_once(DBAPI);		
$customers = null;	$customer = null;		
/**	 *  Listagem de Clientes	 */	
function index() {		
    global $customers;		
    $customers = find_all('alunos');	
}


/**	 *  Cadastro de Clientes	 */	
function add() {		  
    if (!empty($_POST['aluno'])) {	    		   
        $customer = $_POST['aluno'];	    
        save('alunos', $customer);	    
        header('location: index.php');	  
    }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

    ;
  
    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['aluno'])) {
  
        $customer = $_POST['aluno'];

  
        update('aluno', $id, $customer);
        header('location: index.php');
      } else {
  
        global $customer;
        $customer = find('aluno', $id);
      } 
    } else {
      header('location: index.php');
    }
  }