<?php
    $result = DatabaseClassSingleton::getInstance()->Select("Select count(*) as c ,tipo,categoria.id FROM `prodotti` join categoria on idCat = categoria.id GROUP BY idCat HAVING count(*) > 0;");
    foreach ($result as $row) {
        $s = '<a class="text-decoration-none" href="home/cCat.php?id='.$row["id"] .'">
        <div class="cat-item d-flex align-items-center mb-4">
            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                <img class="img-fluid" src="img/cat-1.jpg" alt="">
            </div>';
        echo $s .  "<div class='flex-fill pl-3'>
        <h6>" . $row["tipo"] . "</h6>
        <small class='text-body'>". $row['c']. "Products</small></div></div></a>";
    }

?>