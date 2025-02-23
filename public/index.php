<?php

if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "accueil":
            $title ="Accueil";
            include "../templates/accueil.php";
            break;
        case "inter":
            $title="Interview";
            include "../templates/interview.php";
            break;
         case "expo":
            $title="Exposition";
            include "../templates/exposition.php";
            break;
        case "gal":
            $title="Galerie";
            include "../templates/galerie.php";
            break;
        case "conc":
            $title="Conclusion";
            include "../templates/conclusion.php";
            break;
  
        // variable p pas dans le switch
        default:
        $title="Erreur";
            include "../templates/error.php";
       
    }

// sinon nous sommes sur l'accueil    
}else{
    $title="Accueil";
    include "../templates/accueuil.php";
}