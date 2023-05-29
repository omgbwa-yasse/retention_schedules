<?php
include 'app/design/headerLogin.inc.php';
if(isset($_GET['q']) == FALSE){
  include 'app/views/connexion/connexionForm.inc.php';
}else if(($_GET['q'] == 'session' && $_GET['categ'] == "user" && isset($_GET['sub']))){
    switch($_GET['sub']){
        case 'form': include 'app/views/connexion/connexionForm.inc.php';
        break; 
        case 'control': include 'app/views/connexion/connexionControl.inc.php';
        break;
    }
}
include 'app/design/footer.inc.php';
?>