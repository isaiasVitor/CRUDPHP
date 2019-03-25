
<?php		
header( 'content-type: text/html; charset=utf-8' );
require_once('../config.php');	
require_once(DBAPI);		

session_start();
if(!isset($_SESSION['logado'])):
  header("location:javascript:alert(\"Email enviado com Sucesso!\")");
  header('location:'.BASEURL.'login.php');
endif;

$customers = null;	$customer = null; $relatorios = null; $congregacoes;
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
        header('location: add.php');	  
    }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['aluno'])) {
  
        $customer = $_POST['aluno'];

  
        update('alunos', $id, $customer);
        header('location: index.php');
      } else {
  
        global $customer;
        $customer = find('alunos', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  function congregacoes(){
    global $congregacoes;
    $congregacoes = congregacoes_all();
  }

  function relatorios (){
    global $relatorios;
    $relatorios = relatorioTotalPorCongregacao();
  }
  