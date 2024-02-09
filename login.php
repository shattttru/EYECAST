<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif; 
                background-color: #818182;
                }

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 3px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                background-color: white;
                text-align: center;
                position: relative;

            }

            img.avatar {
                padding: 30px;
                width: 20%;
                border-radius: 50%;
            }

            .container {
                
                color:  black;
                background-color: white;
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 35%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }
            .su{
                float: right;
                
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 100px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 10%;
                }
            }
        </style>
    </head>
    <body>





        <form class="modal-content animate" action="" method="post">
            <div class="imgcontainer">



                <img src="images/login.png" alt="Avatar" class="avatar" ;>
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter email" name="uname" required autocomplete="off">

                <label for="psw"><b>Password</b></label>
                <input type="password" id="myInput" placeholder="Enter Password" name="psw" required>
                
                   <input type="checkbox" onclick="myFunction()">Show Password 
                <a href="index.php"><button type="submit" name="submit">Login</button></a>
                <label>
                    
                </label>
                <span class="su"><a href="registration2.php"style="text-decoration: none">sign up</a></span>                
            </div>

            <div class="container">
                <a href="index.php" ><button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn" >Cancel</button></a>
                <span class="psw"><a href="forgotpass.php" style="text-decoration: none">forgot password?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
<?php

if(isset($_REQUEST['submit'])) {
    echo 'hiii';
    $con = mysqli_connect('localhost', 'root', '', 'optical_shop');
    $EMAIL = $_REQUEST['uname'];
    $PASSWORD = $_REQUEST['psw'];
    

    $q = "select * from tbl_user";
    $result = mysqli_query($con, $q);
    if ($EMAIL == "admin@gmail.com" && $PASSWORD == "a") {
            header('Location: ../myadmin/index.php');
            
    }
 else {
        
    
    while ($row = mysqli_fetch_array($result)) 
    {
        if ($row['email'] == $EMAIL && $row['password'] == $PASSWORD) 
        {   
            $_SESSION['email'] = $row[5];
            $_SESSION['id']=$row[0];
            $_SESSION['name']=$row[1];
            header('Location: indexhome.php');
            ob_end_flush();
        }
        
    }
 } 
}
?>
</html>
