<?php 
include "header.php" ;
include "acounts.php" ;

if (isset($_POST['login']) && isset($_POST['motpasse'])) {
    if($_POST['login'] == "SAMIR" && $_POST['motpasse'] == "123456" ) {
      echo "Login et mot de passe valide" ; 
    } 
    else {
      echo "Login et mot de passe non valide" ;
    }
}

include "footer.php" ?>