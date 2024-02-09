<?php
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>cart</title>
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
  <?php require_once './header.php';?>
      <!-- END HEADER -->
      
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                    <th class="product-remove">Update</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        $con = mysqli_connect("localhost", "root", "", "optical_shop");
//                        if(isset($_GET['product_id']))
//                        {
//                            $pid = $_GET['product_id'];
//                        }if(isset($_GET['product_id']))
                        $qry = "select * from tbl_cart";
                        $record = mysqli_query($con, $qry); 
                        while($row = mysqli_fetch_array($record))
                        {
                            
                    ?>
                  <tr>
                    <td class="product-thumbnail">
                        <img src="<?php echo $row['img'];?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $row['name'];?></h2>
                    </td>
                    <td>₹<?php echo $row['price'];?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: fit-content;">                         
                          <input type="text" id ="qty" name="qty" value="<?php echo $row['qty'];?>">
                      </div>
                        <script>
                            function qty()
                            {
                                var qty=document.getElementById("qty");
                                
                            }
                            </script>

                    </td>
                    <td>₹<?php echo $t=$row['price']*$row['qty']?></td>
                    <td><a href="./delete.php?id=<?php echo $row['id'];?>" name="rem" class="btn btn-primary height-auto btn-sm">remove</a></td>
                    <td><a href="./update.php?id=<?php echo $row['id'];?>" name="update" class="btn btn-primary height-auto btn-sm">update</a></td>
                    
                  </tr>
                        <?php }?>

                  
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                  <input type="submit" name="submit" class="btn btn-outline-primary btn-sm btn-block" value="update">
              <?php
                
              ?>
            </div>
            
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                 
                </div>
                
                

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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