<?php
AppController::Login();
?>
   <div class="login-ctnr">
    <div class="login-box flex-hc">
        <div class="left flex-s-a flex-vc">
            <img src="views/img/login/logo.png" alt="Logo" class="dblock mauto w75p">
        </div>
        <div class="right tac flex-vcc">
            <h1 class="w100p">Iniciar Sesión</h1>
             <?php
      
        if (isset($_SESSION["MENSAJELOGIN"])) {
            echo $_SESSION["MENSAJELOGIN"];
            unset ($_SESSION["MENSAJELOGIN"]);
        }
    ?>
            <form method="post">
                <div class="input-row">
                    <span><i class="fas fa-user"></i></span>
                    <input type="text" placeholder="name@example.com" name="user" required <?php if (isset($_SESSION["LoginEmail"])) { echo ' value="'.$_SESSION["LoginEmail"].'"';} ?>>
                </div>
                <div class="input-row">
                    <span><i class="fas fa-key"></i></span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" id="" value="" class="btn-center">Iniciar Sesión</button>
                <input type="hidden" name="controller-action" value="login">
            </form>
           <div class="more-options">
               <a href="#">Crear <i class="fas fa-user-plus"></i></a> | <a onclick="Recuperar()">Recuperar <i class="fas fa-sync"></i></a>
           </div>

        </div>
        <div class="copy">
            <?php
            include 'views/includes/footer.php';
            ?>
        </div>
    </div>
</div>
<?php
         unset ($_SESSION["LoginEmail"]);
?>