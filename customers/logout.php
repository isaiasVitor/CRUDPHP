<?php
header( 'content-type: text/html; charset=utf-8' );
require_once('../config.php');	
require_once(DBAPI);		

    session_start();
    session_unset();
    session_destroy();
    header('Location: '.BASEURL.'index.php');
  
  ?>