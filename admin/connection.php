<?php 
$servername = "localhost:3306";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password) or die("Couldn't connet to SQL server");

//Selecting DB

mysqli_select_db($con,'ecom') or die("Couldn't select DB");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/C:/wamp64/www');
define('SITE_PATH','http://localhost/MackFab_Industries/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>