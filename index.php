<?php
    session_start();

    // $valeur = preg_split("^{*}/[0-9]+$",$_SERVER["REQUEST_URI"]);
    // var_dump($valeur);die();
    $statements = preg_split("(/)",$_SERVER["REQUEST_URI"]);
    // $keywords = preg_split("\[0-9]{1,3}", "rgf3g g5erg 0");
    // print_r($statements);

    // Rechuperation du chemin ( de l'url apres le nom de domaine)
    // echo $_SERVER["REQUEST_URI"];die(); // Mike/php-object-webforce3/
    
    // Verification des Method Utiliser
    // echo $_SERVER["REQUEST_METHOD"]; die(); // Retourne le type de la method utiliser
    if($_SERVER["REQUEST_METHOD"] == "POST"){ // Si la method est POST

        // Test l'existance de la route
        switch($_SERVER["REQUEST_URI"]){
            case "/Mike/php-object-webforce3/user-register": // Chargement de la Class et lancement de la methode
                require "php/UsersController.php"; // Charger le fichier php
                $usersController = new UsersController();
                $usersController->addUser();
            break;

            default: // Redirection vers la route 404
                header("Location: http://localhost/Mike/php-object-webforce3/404");
        }

    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){

        $id = (sizeof($statements) > 4)?$statements[4]:0;
        unset($statements[4]);
        $_SERVER["REQUEST_URI"] = implode("/", $statements);

        switch($_SERVER["REQUEST_URI"]){
            case "/Mike/php-object-webforce3/":
                require "php/HomeController.php";
                $home = new HomeController();
                $home->home();
            break;

            case "/Mike/php-object-webforce3/logout":                       
                require "php/UsersController.php";
                $usersController = new UsersController();
                $usersController->logClientOut();
            break;
            
            case "/Mike/php-object-webforce3/single":
                require "php/ShopController.php";
                $shop = new ShopController();
                $shop->single($id);
            break;
            
            case "/Mike/php-object-webforce3/404":
                include("404.php");
            break;

            default:
                header("Location: http://localhost/Mike/php-object-webforce3/404");
        }


    }