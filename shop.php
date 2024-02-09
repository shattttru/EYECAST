<?php
ob_start();
$con = mysqli_connect("localhost", "root", "", "optical_shop");
if(!$con)
{
echo"<script>alert('Database connection error.')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/aos.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <style>
        
    </style>
    <body>
        <!-- START HEADER -->
        <?php require_once './header.php'; ?>
        <!-- END HEADER -->


        <div class="custom-border-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-9 order-1">

<!--                        <div class="row align">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            PRICE
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Price, low to high</a>
                                            <a class="dropdown-item" href="#">Price, high to low</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">SORT BY NAME</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Relevance</a>
                                            <a class="dropdown-item" href="#">Name, A to Z</a>
                                            <a class="dropdown-item" href="#">Name, Z to A</a>
                                            <div class="dropdown-divider"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row mb-5">
                            
                            <?php
//                            $qry = "select * from tbl_product";
//                            $record = mysqli_query($con, $qry); 
//                            while($arr = mysqli_fetch_row($record)){
//                                $tempImg = $arr[2];
//                            echo "<div class='col-lg-6 col-md-6 item-entry mb-4'>"
//                                . "<a href = 'shop-single.php' class = 'product-item md-height bg-gray d-block'>"
//                                . "<img src = '$arr[2]' alt = 'Image' class = 'img-fluid'>"
//                                    . "</a>"
//                                    . "<h2 class = 'item-title'><a href = '#'>$arr[1]</a></h2>"
//                                    . "<strong class = 'item-price'> ₹ $arr[3]</strong>"
//                                    ."<a class='icon' style='float:right;font-size:20px;'> <i class='far fa-heart'></i></a>" 
//                                    ."</div>";
//                            }
                            ?>
                            <?php
                                $qry = "select * from tbl_product";
                                $record = mysqli_query($con, $qry); 
                                while($row = mysqli_fetch_array($record))
                                {
                            ?>
                            <div class='col-lg-6 col-md-6 item-entry mb-4'>
                                <a href = 'shop-single.php?product_id=<?php echo $row['product_id']?>' class = 'product-item md-height bg-gray d-block'>
                                    <img src = " <?php echo $row['product_img']?>" alt = 'Image' class = 'img-fluid'>
                                </a>
                                <strong class = 'item-price'>  <?php echo $row['product_name']?> </strong><br>
                                <strong class = 'item-price'> ₹ <?php echo $row['product_price']?> </strong>
                                <!--<a class='icon'  style='float:right;font-size:20px;'> <i class='far fa-heart'></i></a>-->
                            </div>
                                <?php } ?>
                            
                            
                        </div>
                        
                    </div>

<!--                    <div class="col-md-3 order-2 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto"></span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto"></span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto"></span></a></li>
                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">
                            

                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">STYLE'S</h3>
                                <label for="s_sm" class="d-flex">
                                    <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">ROUND</span>
                                </label>
                                <label for="s_md" class="d-flex">
                                    <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">SQUARE</span>
                                </label>
                                <label for="s_lg" class="d-flex">
                                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">FRAME-LESS</span>
                                </label>
                            </div>

                            

                        </div>
                    </div>-->
                </div>

            </div>
        </div>

        <!-- discover the collection -->
        <div class="site-section">
            <div class="container">
                <div class="title-section mb-5">
                    <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-lg-8">
                        <div class="product-item sm-height full-height bg-gray">
                            <a href="shop.php"  onclick="woman" class="product-category">Women </a>
                            <img src="images/collection1.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-item sm-height bg-gray mb-4">
                            <a href="shop.php" class="product-category">Men</a>
                            <img src="images/collection2.jpg" alt="Image" class="img-fluid">
                        </div>

                        <div class="product-item sm-height bg-gray">
                            <a href="shop.php" class="product-category">kids </a>
                            <img src="images/collection3.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end the discover collection -->


        <?php require_once './footer.php'; ?>
    </div>
    <script>
        //var icon = document.getElementById("icon");
        //icon.addEventListener("click", reload, false);
        $(".icon").click(function(){
           $(this).html("<i class='fas fa-heart'></i>"); 
        });
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
<?php ?>
</body>
</php>