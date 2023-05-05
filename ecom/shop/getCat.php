<?php 
//require 'DatabaseClassSingleton.php';
echo '<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
<input type="checkbox" class="custom-control-input" checked id="cat-all">
<label class="custom-control-label" for="price-all">All Categories</label>
</div>';
$s = '';
$result = DatabaseClassSingleton::getInstance()->Select("Select * from categoria");
foreach ($result as $row) {
    $s.='<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color'. $row['tipo'] .'">
                            <label class="custom-control-label" for="price'. $row['tipo'] .'">' . $row['tipo'] .'</label>
        </div>';
}
echo $s;
?>