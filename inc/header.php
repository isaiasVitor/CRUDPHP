<?php
 ini_set('default_charset','ISO-8859-1');
 mb_internal_encoding("UTF-8"); 
 mb_http_output( "iso-8859-1" );  
 ob_start("mb_output_handler");   
 header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ADBA- Discipulado</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BASEURL; ?>">ADBA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL; ?>">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Discipulado
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Cadastrar aluno</a>
                        <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Listagem de alunos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Registrar Presenças</a>
                        <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/relatorio.php">Relatorio Geral</a>

                    </div>
                </li>

            </ul>

        </div>
    </nav>
    </nav>
    <main>