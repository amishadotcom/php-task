<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Amisha</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <?php
    include './themepart/header.php';
    include './themepart/sliderbar.php';
    ?>
    <!-- end header -->


    

    <!-- about -->
    <div id="about" class="about layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/about_img.png" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="heading margin_top_30">
                        <h2>About our shop</h2>
                    </div>
                    <div class="full margin_top_20">
                        <p><strong>This is fresh red apple shop.it is managed by amisha.and available all the types of apple</strong></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- section -->
    <div id="fruits" class="section dark_bg layout_padding left_white">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <div class="heading full text_align_center">
                        <h2 class="white_font full text_align_center">Our Fruits</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f1.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Black Grapes<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>   
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f2.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Pineapple<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <img class="img-responsive" src="images/f3.png" alt="#" />
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">Bananas<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <div class="full main_heading_1">
                        <h2>Fresh Lemon</h2>
                        <p>The lemon is a species of small evergreen tree in the flowering plant family Rutaceae, native to South Asia, primarily Northeast India. </p>
                    </div>   
                    <div class="full margin_top_30">
                        <a class="main_bt" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 margin_top_30 padding_right_0">
                    <div class="full">
                        <img src="images/green_fr.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
<!-- section -->
    
    <!-- end section -->
    <!-- section -->
    <div id="contact" class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6 padding_left_0">
                    <div class="full">
                        <img class="float-left" src="images/fruit_img.png" alt="#" />
                    </div>
                </div>

               <div class="col-md-6">
                <div class="heading">
                        <h2>Contacts <strong class="theme_pink"></strong></h2>
                    </div>
                    <div class="full margin_top_20">
                        <form >
                        <div class="row">
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Your Name" type="text" required="">
                            </div>
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Email" type="Email" required="">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" required="">
                            </div>
                            
                        </div>
                        <button class="main_bt">Submit</button>
                    </form>
                    </div>   
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- footer -->
    <?php
    include './themepart/footer.php';
    ?>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>