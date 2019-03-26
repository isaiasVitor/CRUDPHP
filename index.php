<?php
 ini_set('default_charset','ISO-8859-1');
 mb_internal_encoding("UTF-8"); 
 mb_http_output( "iso-8859-1" );  
 ob_start("mb_output_handler");   
 header("Content-Type: text/html; charset=ISO-8859-1",true);
 session_start();
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<?php if ($db) : ?>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Bem vindo 
        <?php if(isset($_SESSION["nome"])): 
                   echo $_SESSION["nome"];
                endif;?>
        </h1>
        <p class="lead">Este webservice foi criado apenas para teste, utilize com atenção!!</p>
    </div>
</div>
<?php else : ?> <div class="alert alert-danger" role="alert">
    <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>

    <?php endif; ?>
    <?php include(FOOTER_TEMPLATE); ?>