<?php session_start();
if(isset($_SESSION["usuario"])){
?>

<div class = "container is-fluid">
    <h1 class = " title">Home</h1>
    <h2><?php echo "<h4> Bienvenido - ".$_SESSION['usuario']. "</h4>"; ?></h2>
</div>
<?php
}else{
    header("location:./vistas/login.php");
}
?>