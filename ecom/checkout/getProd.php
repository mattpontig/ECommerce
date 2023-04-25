<?php

$result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto as ac join prodotti as p on ac.idArticolo = p.id where idCarrello=". $_SESSION["idCarrello"]);
foreach ($result as $row) {
$s = '<div class="d-flex justify-content-between">
        <p>' . $row['nome'] .'</p>
        <p>' . $row['quantit'] .'</p>
        <p>$'.$row['quantit']*$row['prezzo'].'</p>
        </div>';                
echo $s;
}

?>