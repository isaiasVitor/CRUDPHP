<?php	
    header( 'content-type: text/html; charset=utf-8' );
    require_once('../config.php');	
    require_once(DBAPI);

    session_start();

    // Botão enviar
    if(isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($conn, $_POST['login']);
        $senha = mysqli_escape_string($conn, $_POST['senha']);
    
        if(isset($_POST['lembrar-senha'])):
    
            setcookie('login', $login, time()+3600);
            setcookie('senha', md5($senha), time()+3600);
        endif;
    
        if(empty($login) or empty($senha)):
            
        else:
            // 105 OR 1=1 
            // 1; DROP TABLE teste
    
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($conn, $sql);		
    
            if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);       
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    
    
    
            $resultado = mysqli_query($conn, $sql);
    
                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($conn);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li> Usuário e senha não conferem </li>";
                endif;
    
            else:
                $erros[] = "<li> Usuário inexistente </li>";
            endif;
    
        endif;
    
    endif;
?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Autenticação</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" method="POST">
        <img class="mb-4 rounded-circle" src="https://scontent.faqa3-1.fna.fbcdn.net/v/t1.0-9/18698034_1866444240284077_1650484403571742320_n.jpg?_nc_cat=104&_nc_ht=scontent.faqa3-1.fna&oh=5755c5a54b89848478f6cb77fc2c400a&oe=5D4C2898" alt="" width="75"
            height="75">
        <h1 class="h3 mb-3 font-weight-normal"> Logar </h1>
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" id="inputUsuario" class="form-control" name="login" placeholder="Usuario" required value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>" autofocus>
        <label for="inputSenha" class="sr-only">Senha</label>
        <input type="password" id="inputSenha" class="form-control" name="senha" placeholder="Senha" required value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>">
        <div class="checkbox mb-3">

        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btn-entrar" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">Isaias &copy; 2019</p>
    </form>
</body>

</html>
