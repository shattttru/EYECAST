<?php 
ob_start();
if(session_start()=== PHP_SESSION_NONE)
{
session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">

        <!-- Title Page-->
        <title>REGISTRATION</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/registration.css" rel="stylesheet" media="all">
    </head>

    <body>
        
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">Registration Form</h2>
                        <form action="" method="POST">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">first name</label>
                                        <input class="input--style-4" type="text" name="first_name" pattern="[A-Za-z]+" required="" title="charcter's only" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">last name</label>
                                        <input class="input--style-4" type="text" name="last_name" pattern="[A-Za-z]+" required="" title="charcter's only" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Birthday</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="date" name="birthdate" max="<?php echo (date("Y")-18)."-".date("m")."-".date("d") ?>" autocomplete="off">
                                            
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Gender</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male
                                                <input type="radio" name="gender" value="m" checked="checked" autocomplete="off"/>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female
                                                <input type="radio" name="gender" value="f" autocomplete="off"/>
                                                <span class="checkmark"></span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Email</label>
                                        <input class="input--style-4" type="email" name="email" title="abc@gmail.com" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Phone Number</label>
                                        <input class="input--style-4" type="tel" name="phone" maxlength="10" pattern="[6789][0-9]{9}" title="only digits or start from 6,7,8,9" autocomplete="off">

                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain 1 number,1 uppercase and lowercase letter and enter at least 8 or more charcters" autocomplete="off">
                            </div>
                            <div class="p-t-15">
                                <a href=""><button class="btn btn--radius-2 btn--blue" type="submit" name="submit" >Submit</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body>
</html>
<?php

if (isset($_POST['submit'])) 
{

    $con = mysqli_connect('localhost', 'root', '', 'optical_shop');
    $_SESSION['fname'] = $_POST['first_name'];
    $_SESSION['lname'] = $_POST['last_name'];
    $_SESSION['bdate'] = $_POST['birthdate'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['email']= $_POST['email'];
    $_SESSION['mobile']= $_POST['phone'];
    $_SESSION['password'] = $_POST['password'];
    
    //$r = mysqli_query($con, "insert into tbl_user (fname,lname,bdate,gender,email,mobile_no,password) values ('$fname','$lname','$bdate','$gender','$email','$mobile','$password')");
    include_once './mail.php';
    //header('Location: otp.php');
    
     header('location: ./otp.php');
    ob_end_flush();
}



?>

<!-- end document-->
