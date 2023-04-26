<?php
$result = DatabaseClassSingleton::getInstance()->Select("Select * from ordini as ac join prodotti as p on ac.idArticolo = p.id where idCarrello=". $_SESSION["idCarrello"]);
foreach ($result as $row) {

    $s ='<tr>
        <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> '. $row["nome"] .'</td>
        <td class="align-middle">'. $row["prezzo"] .'</td>
        <td class="align-middle">
        <div class="input-group quantity mx-auto" style="width: 100px;">
            <div class="input-group-btn">
                <button class="btn btn-sm btn-primary btn-minus" >
                    <i class="fa fa-minus"></i>
                </button>
            </div>
            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $row["quantit"] .'">
            <div class="input-group-btn">
            <button class="btn btn-sm btn-primary btn-plus">
                <i class="fa fa-plus"></i>
            </button>
                </div>
            </div>
            </td>
            <td class="align-middle">$'. $row["prezzo"] * $row["quantit"] .'</td>
            <td class="align-middle"><a class="h6 text-decoration-none text-truncate" href="operazioni/remove.php?id=' . $row["idC"] . '">' . 'X' . "</a>".'</td>
    </tr>';
}
    echo $s;

?>