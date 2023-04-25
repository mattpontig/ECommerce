<?php
if(isset($_GET['id']))
    $_SESSION['cat'] = $_GET['id'];
else unset($_SESSION['cat']);
header("Location: ../index.php");
?>