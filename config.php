<?php


define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','Shubh@8108');
define('DB_NAME','prepmeup_db');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn==false){
    dir('Error: Cant Connect');
}


?>