<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from utente where id = ". $_SESSION['id']);
    foreach ($result as $row){
    // output data of each row
    echo '<div class="col-md-6 form-group">
    <label>First Name</label>
    <input class="form-control" type="text" value="'.$row['nome'].'">
</div>
<div class="col-md-6 form-group">
    <label>E-mail</label>
    <input class="form-control" type="text" value="'.$row['email'].'">
</div>
<div class="col-md-6 form-group">
    <label>Address Line 1</label>
    <input class="form-control" type="text" name="addr" value="'.$row['via'].'">
</div>
<div class="col-md-6 form-group">
    <label>Country</label>
    <select class="custom-select">
        <option selected >Italy</option>
        <option>United States</option>
        <option>Afghanistan</option>
        <option>Albania</option>
    </select>
</div>
<div class="col-md-6 form-group">
    <label>City</label>
    <input class="form-control" type="text" name="city" value="'.$row['citta'].'">
</div>
<div class="col-md-6 form-group">
    <label>ZIP Code</label>
    <input class="form-control" type="text" name="zip" value="'.$row['cap'].'">
</div>';
    }
?>