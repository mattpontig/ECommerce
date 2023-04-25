<?php 
    require '../DatabaseClassSingleton.php';
    if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"]) && empty($_POST["confirmPassword"])) {
        echo "Completa tutti i campi";
    }else{

        if(strlen($_POST["password"]) < 1){
            header("location: register.php?msg=Password troppo corta");
        }

        else if($_POST["password"] != $_POST["password"]){
            header("location: ../register.php?msg=Password differenti");
        }else{
            $pwd = md5($_POST["password"]);
            $name = $_POST["name"];
            $em = $_POST["email"];
            
            DatabaseClassSingleton::getInstance()->Insert("INSERT INTO utente (nome , email,password) VALUES ( ?  , ? ,?)", ['sss', $name, $em,$pwd]);
        }
    }
?>