<?php

// ATTENTION AVEC LE GET - J'AI UTILISER 'PAGE', CHANGE LE SI IL LE FAUT (POUR ?section= ou ?page=)

if(isset($_GET["p"])) {
    switch($_GET["p"]) {
        case "home" :
            $title = "Portfolio de Ben Salem Rami - Développeur Web Full-Stack";
            include("../view/homepage.view.php");
            break;
        case "resume" :
            $title = "Mes compétences - Ben Salem Rami";
            include ("../view/resume.php");
            break;
        case "projects" :
            $title = "Mes travaux - Ben Salem Rami";
            include ("../view/projects.php");
            break;
        case "contact" :
            $title = "Contact";
            include ('../view/contact.php');
        default :
            $title = "Page Introuvable";
            include("../view/error404View.php");         
    }
    }else {
        $title = "Portfolio de Ben Salem Rami - Développeur Web Full-Stack";
        include("../view/homepage.view.php");
    }