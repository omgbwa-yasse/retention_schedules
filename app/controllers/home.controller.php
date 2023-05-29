<?php
if(isset($_GET['q'])){
    switch($_GET['q']){
        case 'classification': include 'app/controlers/classification.controler.php';
        break; 
        case 'communicability': include 'app/controlers/communicability.controler.php';
        break;
        case 'retention': include 'app/controlers/retention.controler.php';
        break;
        case 'thesaurus': include 'app/controllers/thesaurus.controler.php';
        break;
        case 'typology': include 'app/controlers/typology.controler.php';
        break;
        case 'reference': include 'app/controlers/reference.controler.php';
        break;
        case 'setting': include 'app/controlers/setting.controler.php';
        break;
        case 'session': include 'app/controllers/session.controller.php';
        break;
        case 'home': include 'app/views/home.php';
        break;
        default : include 'app/controlers/classification.controler.php';
    }
} else{
    include 'app/controllers/session.controller.php';
}
?>