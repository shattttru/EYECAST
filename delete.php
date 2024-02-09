<?php
    if(isset($_REQUEST['id']))
    {
        $id=$_REQUEST['id'];
    }
    $con = mysqli_connect("localhost", "root", "", "optical_shop");
                         $n=$row['product_name'];
                        $q = "delete from tbl_cart where id=$id";
                        $record = mysqli_query($con, $q);
                        header('Location: cart.php');
?>