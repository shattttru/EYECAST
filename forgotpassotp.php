<?php 
if(session_start()=== PHP_SESSION_NONE)
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



/* The popup form - hidden by default */
.form-popup {
  display: none;
  margin: 5% 50% 10% 35%;
  border: 4px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="form-popup" id="myForm">
    <form action=" " method="post" class="form-container">
    <h1>OTP</h1>

    <label for="email"><b>ENTER YOUR OTP HERE</b></label>
    <input type="text"  name="otp1" required maxlength="6">
    <button type="submit" class="btn" name="submit">Login</button>
    
  </form>
</div>

<script>

  document.getElementById("myForm").style.display = "block";


function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php


if (isset($_REQUEST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'optical_shop');
    $email=$_SESSION['email12'];
    $otp=$_REQUEST['otp1'];
    
    if($_SESSION['otp']==$otp){
        
    $con = mysqli_connect('localhost', 'root', '', 'optical_shop');
    header("Location: newpass.php");
    
    }
 else {
        echo 'retry';
    }
}
?>

</body>
</html>
