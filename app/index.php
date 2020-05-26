<?php require_once 'vendor/autoload.php'; ?>
<?php
$somador = new \myapp\somador;
$subtrair = new \myapp\subtrador;
echo $somador->soma(1,2);
echo "<br/>";
echo $subtrair->subtrair(2,5)
?>