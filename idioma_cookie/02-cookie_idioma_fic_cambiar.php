<?php
if (isset($_GET['idioma'])){
    $expire = time() + 90*24*60*60;
    setcookie('idioma', $_GET['idioma'],$expire);
}
header("location:02-cookie_idioma_fic_0.php");?>