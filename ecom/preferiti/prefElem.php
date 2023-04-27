<?php
$_SESSION['totProd'] = 0;
if(isset($_SESSION["id"])){
$result = DatabaseClassSingleton::getInstance()->Select("Select * from preferiti as ac join prodotti as p on ac.idProd = p.id where idUtente=". $_SESSION["id"]);
foreach ($result as $row) {
$s =                    '<tr>
                            <td class="align-middle"> <a href="detail.php?id='. $row['idProd'] .'"><img src="img/product-5.jpg" alt="" style="width: 50px;"> '. $row["nome"] .'</a></td>
                            <td class="align-middle">$'. $row["prezzo"] .'</td>
                            <td class="align-middle"><a class="h6 text-decoration-none text-truncate" href="operazioni/removePref.php?id=' . $row["idPref"] . '">' . 'X' . "</a>".'</td>
                        </tr>';
    echo $s;
}
}
?>