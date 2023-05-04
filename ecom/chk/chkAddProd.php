<?php
session_start();
if($_SESSION['admin']){
	//Costruisco il path completo di destinazione
	$target_dir = "../img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
    
    DatabaseClassSingleton::getInstance()->Insert("Insert into prodotti( `nome` , `des`,`quant`,`prezzo`,`idCat`,`img`) values ( ? , ? ,?,?,?,?)", [
        'ssifis',$_POST['name'], $_POST['desc'] , $_POST['quant'],$_POST['prezzo'],$_POST['cmbRep'],basename($_FILES['fileToUpload']['name'])]);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();

    }
}
	
?>