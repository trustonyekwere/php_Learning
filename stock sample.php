<?php 

$stock = 24;

if ($stock >= 24) {
    echo $stock = "stock is full";
}
elseif ($stock >= 10 ) {
    echo $stock = "stock is okay";
}
elseif ($stock >= 1 ) {
    echo $stock = "stock is nearly empty";
}
else {
    echo $stock = "stock is empty";
}

?>
