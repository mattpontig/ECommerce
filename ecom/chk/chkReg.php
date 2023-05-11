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
            
            DatabaseClassSingleton::getInstance()->Insert("Insert into utente (`nome` , `email` , `password`) values ( ? , ? ,?)", ['sss', $name , $em ,$pwd]);

            $result = DatabaseClassSingleton::getInstance()->Select("Select id from utente where email='" . $em ."' and password='" . $pwd . "'");

            foreach ($result as $row) {
                $id = $row['id'];           

            $_SESSION['id'] = $id;

            include '../carrello/createNew.php';
            header('Location: ../index.php');
        }
    }
    }
?>