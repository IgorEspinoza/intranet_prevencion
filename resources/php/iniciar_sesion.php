<?php
    # almacenar datos en variables #
    $user = limpiar_cadena($_POST['login_usuario']);
    $pass = limpiar_cadena($_POST['login_pass']);

    #verificar los datos#
    if($user=="" || $pass==""){
        echo '
            <div class = "notication is-danger is-light"> 
                |<strong>¡Ocurrio un error inesperado!</strong><br>
            </div> ';
        exit();
    }

    #verificar integridad de los datos#
    if(verificación("[0-9]{9,20}",$user)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un errorr inesperado!</strong><br>
                El Usuario no coincide con el formato solicitado 
            </div>
        ';
        exit();
    }

    if(verificación("[0-9]{4,20}",$pass)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un errorr inesperado!</strong><br>
                La Contraseña no coincide con el formato solicitado 
            </div>
        ';
        exit();
    }

    #validacion de login#
    $check_user = conexion();
    $check_user = $check_user-> query("SELECT * FROM usuario WHERE usuario = '$usuario'");

    if($check_user->rowCount() == 1){
        $check_user = $check_user->fetch();

        if($check_user['usuario'] == $user && password_verify($pass,$check_user['usuario_pass'])){
            $_SESSION['id'] = $check_user['usuario_id'];
            $_SESSION['usuario'] = $check_user['usuario'];
            
            if(headers_sent()){
                echo "<script>window.location.href='index.php?vista=home'</script>";
            }else{
                header("Location: index.php?vista=home");
            }

        }else{
            echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un errorr inesperado!</strong><br>
                Usuario o Contraseña incorrectos
            </div>
        ';
        }

    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un errorr inesperado!</strong><br>
                Usuario o Contraseña incorrectos
            </div>
        ';
    }
    $check_user = null;
?>