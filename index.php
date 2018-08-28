<?php 
include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIMCT</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Full width inputs */
        input[type=text],input[type=password]{
         width:100%;
         padding: 12px 20px;
         margin:8px 0;
         display: inline-block;
         border:1px solid #ccc;
         box-sizing: border-box; 
        }
        /*input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;}*/
    	
        .bla{font-family: serif;
             text-align: center;}
             
        #navbar{
            overflow: hidden;
            
    	}
        #navbar button{
            float:left;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            color:#f2f2f2;
            display: block;
            padding : 14px 16px;
        }
        #navbar button:hover{
            background-color: #ddd;
            color:black;

        }
        #navbar button.active{
             background-color: #4BA01E;
             color:white;
        }
        .m{
           background-color: #f2f2f2;
             color:black;
        }

        .imgcontainer{
            text-align: center;
            margin:24px 0 12px 0;
            position:relative; 
        }

        img.avatar{
            margin:10px 10px 10px 10px;
            width:40%;
            border-radius:50%;
        }

        span.psw{
            float:right;
            padding-top:16px;
        }
        /* Modal background */
        .modal{
            display: none;
            position:fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content{
            background-color:#fefefe;
            margin:5% auto 15% auto;
            border:1px solod #888;
            width:80%;
        }

        .close{
            position: absolute;
            right:25px;
            top:0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        btn1{
            width:100%;
            color:black;
        }

        .close:hover,
        .close:focus{
            color:red;
            cursor:pointer;
        }
        .clearfix:after{
            display: table;
            content: "";
            clear:both;
        }
        .animate{
            -webkit-animation:animatezoom 0.6s;
            animation: animatezoom 0.6s;
        }
        @-webkit-keyframes animatezoom{
            from{-webkit-transform:scale(0);}
            to{-webkit-transform:scale(1);}
        }
        @keyframes animatezoom{
            from{
                transform:scale(0);
            }
            to{
                transform:scale(1);
            }
        }
        @media screen and (max-width:300px){
            span.psw{
                display:block;
                float:none;
            }
            .cancelbtn{
                width:100%;
            }
        }
    </style>
</head>
<body>
    <div class="header w3-container m "> 
    	<h1 class="bla w3-jumbo">AIMCT !</h1>
    </div>
    <div id="navbar" class="w3-black">
        <button class="active w3-button" href="#"><i class="fa fa-home"></i> AIMCT</button>
        
        <button class="w3-button" onclick="document.getElementById('id01').style.display='block'" style="float: right;width:auto;"><i class="fa fa-user"></i> Login</button>
       <!-- MOdal Starts -->
    <div id="id01" class="modal">
        <form class="modal-content animate" method="POST">
            <div class="imgcontainer">
                <span 
                    onclick="document.getElementById('id01').style.display='none'" class="close" title="close">&times;</span>
                <img src="logo.png" alt="avatar" class="avatar">
            </div>
                
            <div class="w3-container">
                                <label style="color:black;" for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label style="color:black;" for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button class="w3-button w3-green" style="width: 100%" type="submit" name="login">Login</button>
                <br>
                <label style="color:black;">
                <input  type="checkbox" name="remember" checked>  Remember me</label>
                <br>
            </div>
            <div class="w3-container" style="background-color: #f1f1f1">
                <button style="margin:5px 5px;" class=" w3-button cancelbtn w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel</button>

                <span style="color:black;" class="psw">Forgot<a href="#"> password ?</a></span>
                    
                <br>
                <br>
                <div style="color:black;float: right;" class="psw"> Not a member yet ?  <button class="w3-button" style="padding:0px;margin-bottom:5px ;float: right ;color: black;" onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none'">Signup</button></div>
            </div>
        </form>
         <!-- modal ends -->
    </div>
    
    <script >
            //getting my modal
            var modal=document.getElementById('id01');
            window.onclick=function(event){
                if(event.target==modal){
                    modal.style.display="none";
                }
            }
    
    </script>
    
        <button class="w3-button" onclick="document.getElementById('id02').style.display='block'" style="float: right;width: auto;"><i class="fa fa-address-book"></i> Signup</a></button>

        <div id="id02" class="modal" style="color:black;">
            
                <form class="modal-content animate" method="POST">
                    <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="close">&times;</span>
                    </div>
                    <div class="w3-container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <div class="w3-container">
                                                <label for="first_name"><b>First Name</b></label>
                        <input type="text" name="first_name" placeholder="Enter Your First Name" required>
                        <label for="last_name"><b>Last Name</b></label>
                        <input type="text" name="last_name" placeholder="Enter Your Last Name" required>
                        <label for="email"><b>Email</b></label>
                        <input type="text" name="email" placeholder="Enter Email" required>

                     
                        <label for="psw"><b>Password</b></label>
                        <input type="password" name="psw1" Placeholder="Enter Password" required>
                        <label for="psw-repeat"><b>Confirm Password</b></label>
                        <input type="password" name="psw2" Placeholder="Enter Password" required>
                        <label>
                            <input type="checkbox" name="remember" checked style="margin-bottom: 15px"> Remember me
                        </label>
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p></div>

                        <div class="clearfix">
                            <button class="w3-button w3-red" style="width:50%" onclick="document.getElementById('id02').style.display='none'" >Cancel</button>
                        <button style="width: 50%;" type="submit" class="submit w3-button w3-green" name="signup">Sign up</button>
                        </div>
                    
                    </div>
                </form>

    </div>
    <script >
            //getting my modal
            var modal=document.getElementById('id02');
            window.onclick=function(event){
                if(event.target==modal){
                    modal.style.display="none";
                }
            }
    
    </script>
    
    <div class="w3-container w3-display-bottommiddle m w3-block" style="text-align:center;">
    	<p>AIMCT&copy; All Rights Reserved .</p>
    </div>


</body>
</html>