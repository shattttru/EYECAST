<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if(session_start()=== PHP_SESSION_NONE)
{
session_start();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title></title>
    </head>
    <body>
        <div class="form-gap" style="margin-top: 80px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">

                                <h2 class="text-center">new Password</h2>

                                <div class="panel-body">

                                    <form id="register-form"  autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-1x color-blue"></i></span>
                                                <input id="password" name="pass" placeholder="enter your new password" class="form-control"  type="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_REQUEST['submit'])) {
            $con = mysqli_connect('localhost', 'root', '', 'optical_shop');
            $p=$_REQUEST['pass'];
            $e=$_SESSION['email12'];
           $q="update tbl_user SET password='$p' where email='$e'";
           mysqli_query($con, $q);
           header('location: login.php');
        }   
        ?>
    </body>
</html>
