<div class="main-container"> 
    <form class="box login" action="" method="POST" autocomplete="off">
        <h5 class="title is-5 has-text-centered is-uppercase">Sistema de Prevencicon de Riesgos</h5>

        <div class="field">
            <label class="label">Usuario</label>
            <div class="control">
                <input class="input" type="text" name="login_usuario" pattern="[0-9]{4,20}" maxlength="20" required>
            </div>
        </div>
        
        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input class="input" type="password" name="login_pass" pattern="[0-9]{4,4}" maxlength="4" required> 
            </div>
        </div>

        <p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="button is-info is-rounded">Iniciar Sesion</button>
        </p>

        <?php
            if(isset($_POST['login_usuario']) && isset($_POST['login_pass']) ){
                
                require_once "./php/Conexion.php";
                require_once "./php/iniciar_sesion.php";

            }
        ?>

    </form>
</div>
