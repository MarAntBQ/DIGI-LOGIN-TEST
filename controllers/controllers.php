<?php
//Web Site General Settings
$WebSiteName = "Marbust Framework PHP";
$WebSiteSEODescription = "";
$WebSiteSEOKeywords = "";

if ( isset( $_GET["path"] ) ) {
    if ( isset( $_SESSION['loggedin'] ) ) {

    } else {
        $_SESSION['loggedin'] = FALSE;
    }
    if ( $_SESSION['loggedin'] == TRUE ) {
        switch ( $_GET["path"] ) {
            case "dashboard":
            $PageName = "Panel de Usuario";
            $PageLocation = "views/pages/dashboard.php";
            $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
            break;
            case "logout":
            session_destroy();
            header( "Location: login" );
            break;
            default:
            header( "Location: dashboard" );
            exit;
        }
    } else {
        switch ( $_GET["path"] ) {
            case "login":
            $PageName = "Inicio de Sesión";
            $PageLocation = "views/pages/home.php";
            $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
            break;
            default:
            header( "Location: login" );
            exit;
        }
    }
} else {
    header( "Location: login" );
    exit;
}
$FBLink = "https://www.facebook.com/";
$TWLink = "https://twitter.com/";
$WALink = "https://api.whatsapp.com/send?phone=593";
$PHLink = "tel:+99999999999";
$IGLink = "https://www.instagram.com/";
$YTLink  = "https://www.youtube.com/";
$ELink = "mailto:@";

class AppController {
    public static function Login() {
        if ( isset( $_POST["controller-action"] ) ) {
            $controller_action = $_POST["controller-action"];
            if ( $controller_action == "login" ) {
                $user = filter_input( INPUT_POST, 'user', FILTER_SANITIZE_STRING );
                echo $user;
                if ( $user != "admin" ) {
                    $_SESSION["MENSAJELOGIN"] =  '<p class = "tac fs14px mt15px w100p login-msg">"El Inicio de Sesión no puede continuar debido a que no existe una cuenta en el Sistema Registrada con ese usuario, como sugerencia use <strong>admin</strong> en ambos campos."</p>';
                    header( "Location: login" );
                    exit;
                }
                $_SESSION["LoginEmail"] = $user;
                $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
                if ( $password != "admin" ) {
                    $_SESSION["MENSAJELOGIN"] =  '<p class = "tac fs14px mt15px w100p login-msg">"El Inicio de Sesión no puede continuar debido a que la contraseña ingresada es incorrecta.</p>';
                    header( "Location: login" );
                    exit;
                }
                $_SESSION['loggedin'] = TRUE;
                header( "Location: dashboard" );
                exit;
            }
        }
    }
}

?>