<?php
$w = '1';
$s = "";
if(isset($_SESSION['cat']))
    $w = 'idCat=' . $_SESSION['cat'];
$result = DatabaseClassSingleton::getInstance()->Select("Select * from prodotti where " . $w);

    foreach ($result as $row) {
        $_SESSION["prod"] = $row["id"] ;
    include "review/countRev.php";
    $s = '
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/'. $row["img"] .'" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="carrello/addCarr.php?id=' . $row["id"] . '"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="home/addPref.php?id=' . $row["id"] . '"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">';
    $s2 = '<div class="d-flex align-items-center justify-content-center mt-2">';
    $s3 = '</div>
    <div class="d-flex align-items-center justify-content-center mb-1">'. $str .'<small>('. $t . ')</small>
    </div>
</div>
</div>
</div>';

        echo $s;
        echo '<a class="h6 text-decoration-none text-truncate" href="detail.php?id=' . $row["id"] . '">' . $row["nome"] . "</a>";
        echo $s2;
        echo '<h5>'.$row["prezzo"] .'</h5><h6 class="text-muted ml-2"><del>' . $row["prezzo"].'</del></h6>';
        echo $s3;
    }

?>


                        
                           
                        