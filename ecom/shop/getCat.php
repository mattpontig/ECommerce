<?php 
//require 'DatabaseClassSingleton.php';
echo '<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
<input type="radio" checked name="categoria" value="0">
<label>All Categories</label>
</div>';
$s = '';
$result = DatabaseClassSingleton::getInstance()->Select("Select * from categoria");
foreach ($result as $row) {
    $s.='<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" name="categoria" value="'. $row['id'] .'">
                            <label">' . $row['tipo'] .'</label>
        </div>';
}
echo $s;
?>