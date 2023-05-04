<?php
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from ((ordini join carrello on ordini.idCarrello = carrello.id) join acquisto on ordini.idCarrello =acquisto.idCarrello)
    join prodotti on acquisto.idArticolo = prodotti.id where ordini.idCarrello=". $_SESSION["lastIdCarrello"]);
    $s = '<table><th>img</th><th>Nome</th><th>Quantita</th><th>Prezzo</th><th>Totale</th>';
    $t = '';
    foreach ($result as $row) {
        $t = $row["prezzoTot"];;
        $s .='<tr>
            <td class="align-middle"><img src="img/'. $row["img"] .'" alt="" style="width: 50px;"></td> '.
            '<td class="align-middle">'. $row["nome"].'</td> '.
            '<td class="align-middle">'. $row["quantit"].'</td> '.
            '<td class="align-middle">'. $row["prezzo"].'</td> '.
            '<td class="align-middle">'. $row["prezzo"] * $row["quantit"].'</td> '.
            '</tr>';
    }
    $s = $s.'</table>Totale = ' .$t ;
        echo $s;

?>