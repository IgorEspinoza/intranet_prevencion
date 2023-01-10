
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Intranet Prevención</title>
<link rel="stylesheet" href="./css/bulma.min.css">
<link rel="stylesheet" href="./css/estilos.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php 

        if(!isset($_GET['vista']) || $_GET['vista'] == ""){
            $_GET['vista'] = "login";
        }

        if (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
            
            include("./inc/menu.php");

            include "./vistas".$_GET['vista'].".php";
          
            include ("./inc/script.php");

        }else{
            if ($_GET['vista'] == "login") {
                include ("login.php");                
            }else{
                include ("404.php");  
            }
        }

    ?>
</body>
</html>
