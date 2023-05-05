<?php
$s = '';
$result = DatabaseClassSingleton::getInstance()->Select("Select * from comstar as cs join utente as u on cs.idUtente = u.id where cs.idProdotto=". $_SESSION["prod"]);
foreach ($result as $row) {
    $str = '';
    for ($i = 1; $i < 6; $i++) {
            if($i <= $row['stelle'])
                $str .= '<i class="fas fa-star"></i>';
            else 
                $str .= '<i class="far fa-star"></i>';
    }
    $s .='
                                    <div class="media mb-4">
                                        <img src="../img/defaultImg.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>'. $row['nome'] .'<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                ' . $str .'
                                            </div>
                                            <p>'. $row['commenti'] .'</p>
                                        </div>
                                    </div>';
}
    echo $s;

?>