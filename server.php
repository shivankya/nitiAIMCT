<?php

session_start();
$username="";
$email="";
$error= array();
$db=mysqli_connect('localhost','root','','users');


if(isset($_POST['signup']))
{  $db=mysqli_connect('localhost','root','','users');
	$first_name=mysqli_real_escape_string($db,$_POST['first_name']);
	$last_name=mysqli_real_escape_string($db,$_POST['last_name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['psw1']);
	$password_2=mysqli_real_escape_string($db,$_POST['psw2']);

   if($password_1!=$password_2)
   {array_push($error,"Passwords do not match");
   	header("Location:index.php?error1=Passwords%20do%20not%20match%20");
    }
   if(count($error)==0)
   { 
   	$password=md5($password_1);
   	$sql="INSERT INTO aimct (first_name,last_name,email,password) VALUES ('$first_name','$last_name','$email','$password')";
   	mysqli_query($db,$sql);
   	
     
   	$_SESSION['email']=$email;
   	$_SESSION['name']=$first_name;
   	$_SESSION['success']="You are now logged in";
   	{ header("Location:map.php");}
         }
   	}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['name']);
	header("Location:index.php");
}

if(isset($_POST['login']))
{  $db=mysqli_connect('localhost','root','','users');
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['psw']);
	$password=md5($password);
	$query="SELECT first_name FROM aimct WHERE email='$email' AND password='$password'";
   
   
	$result=mysqli_query($db,$query);


       //  die;
	if(mysqli_num_rows($result)==1)
   {   
      
      
      $db=mysqli_connect('localhost','root','','users');
       
		   $bla="SELECT first_name FROM aimct WHERE email='$email' AND password='$password'";
        
         $row=$result->fetch_assoc();
         $_SESSION['name']=$row["first_name"];
         $_SESSION['success']="You are now logged in";
	   	{header("Location:map.php");}
      }
	   	else{
	   		array_push($error,"Username\password combination is wrong ");
	   		header("Location:index.php?error2=username/password%20combination%20is%20wrong");
	   	}
      }
?>