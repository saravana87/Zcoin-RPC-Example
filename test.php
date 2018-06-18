<?php
require_once('Zcoin.php');
$zcoin=new Bitcoin('zcoin','zcoin123','localhost','12225');

print_r($zcoin->getinfo());

?>
