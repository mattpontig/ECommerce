<?php
$tp = 0;
$s = 0;
  $tp = $_SESSION['totProd'];
  if($tp < "30")
    $s = 10;
$_SESSION['spedizione'] = $s;
$site = "location.href='checkout.php'";

$st = $tp + $s;
$_SESSION['tot'] = $st;
echo '<div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$' . $tp .'</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$'. $s .'</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$'. $st .'</h5>
                        </div>
                        <button onclick="'. $site .'" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>';
?>