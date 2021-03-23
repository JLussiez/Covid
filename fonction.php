<?php
$BDD=null;
try{

    $BDD = new PDO("mysql:host=mysql-lussiezjulien80.alwaysdata.net; dbname=lussiezjulien80_virus; charset=utf8", "230226_root", "covidsympa");

}catch(Exception$e){
    
    echo $e->getMessage();
}
?>