<?php
include('C:\wamp64\www\MackFab_Industries\admin\function.php');
?>
<?php 
//Included paths have no place in code on the front end (live) of the site anywhere, and should be secured and used in production environments only. 
include('C:\wamp64\www\MackFab_Industries\admin\connection.php');
session_start();
$msg='';

if(isset($_POST['submit'])){
	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['password']);
	$sql="select * from admin_users where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['ADMIN_USERNAME']=$username;
		header('location:categories.php');
		die();
	}else{
		$msg="Please enter correct login details";	
	}
	
	}
?>


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="Admin_CSS/Admin_Style.css">
   </head>
   <body background="../images/images/b.jpg">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post">
                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username..." required>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					</form>
                    <div class="field_error"><?php echo $msg?></div>
               </div>
            </div>
         </div>
      </div>
    
     <script src="Admin_js/main.js" type="text/javascript"></script>
   </body>
</html>