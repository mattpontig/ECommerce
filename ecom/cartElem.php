<?php
$pieces = explode(";", $_COOKIE['cart']);
echo ($_COOKIE['cart']);
foreach ($pieces as $p){
$result = DatabaseClassSingleton::getInstance()->Select("Select * from prodotti where id=". $p);
foreach ($result as $row) {
$s =                    '<tr>
                            <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> '. $row["nome"] .'/td>
                            <td class="align-middle">'. $row["prezzo"] .'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>';
    echo $s;
}
}
?>