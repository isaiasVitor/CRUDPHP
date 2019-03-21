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
