<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Single shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
   <!-- START HEADER -->
  <?php require_once './header.php';
        
  ?>
      <!-- END HEADER --> 
   
      <form action="" method="POST">
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> </div>
        </div>
      </div>
    </div>  
      
    <div class="site-section">
      <div class="container">
        <div class="row">
            <?php 
                $con = mysqli_connect("localhost", "root", "", "optical_shop");
                if(isset($_REQUEST['product_id']))
                {
                    $pid = $_REQUEST['product_id'];
                }
                $qry = "select * from tbl_product where product_id =$pid";
                  $record = mysqli_query($con, $qry); 
                  while($row = mysqli_fetch_array($record))
                  {
             ?>
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="<?php echo $row['product_img']?>" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black">stylest</h2>
            <p>Block 98% of harmful rays from Digital Devices<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A great collection of 200+ Eyeglasses</p>
            <p><strong class="text-primary h4"> ₹ <?php echo $row['product_price'];?></strong></p>
           
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
                  <input type="text" class="form-control text-center" name="qty" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
<!--            <p><a href="cart.php?product_id=<?php // echo $row['product_id'];?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>-->
            <input type="submit" name="submit" value="add to cart">
            <?php
            if(isset($_REQUEST['submit']))
                {
                $_SESSION['product_id']=$row['product_id'];
                $url=$row['product_img'];
                $name=$row['product_name'];
                $price=$row['product_price'];
                $qty=$_REQUEST['qty'];
            $qu="insert into tbl_cart values (null,'$url','$name',$price,$qty)";
            $r= mysqli_query($con, $qu);
             header('Location: cart.php');
             ob_end_flush();
                }      
                ?>
          </div>
                  <?php }?>
        </div>
      </div>
    </div>
      </form> 

    
    <?php require_once './footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>