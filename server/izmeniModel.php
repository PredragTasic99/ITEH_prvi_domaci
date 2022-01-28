<?php

require 'broker.php';
$broker=Broker::getBroker();

$broker->izvrsiUpit("update model set naziv='".$_POST['naziv']."', tip='".$_POST['tip']."', duzina='".$_POST['duzina']."', sirina='".$_POST['sirina']."' where id=".$_POST['id']." and marka=".$_POST['marka']);
$rezultat=$broker->getRezultat();
if(!$rezultat){
   echo $broker->getMysqli()->error;
}else{
    echo '1';
}

?> 