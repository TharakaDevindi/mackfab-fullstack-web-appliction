<?php
include('C:\wamp64\www\MackFab_Industries\admin\connection.php');
session_start();
include('C:\wamp64\www\MackFab_Industries\admin\function.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>

<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Dashboard Page - Mackfab</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="Admin_CSS/Admin_Style.css">
     
      
</head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" >Categories</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="product.php" >Products</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="order.php" >Orders</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="users.php" >Users</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" >Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="../images/icon/logo icon2.jpg" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="../images/icon/logo icon2.jpg" alt="Logo"></a>
                  
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
               <a style="margin-top:15px;" href="logout.php">LogOut</a>
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     
                   
                  </div>
               </div>
            </div>
         </header>