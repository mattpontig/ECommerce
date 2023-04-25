<?php
if(isset($_GET['id'])){
    header("Location: ../index.php?cat=" . $_GET['id']);
}
else 
    header("Location: ../index.php");
?>