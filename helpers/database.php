
<?php
require_once('../config.php');


function getDbh(){
    $connec = new PDO("mysql:dbname=Blog", 'root', '0000');
    return $connec;

}