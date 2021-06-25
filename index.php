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
  <title>Welcome to Organic Farm</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/Newstyle.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                      <a href="Web/Profile.php"><img src="images/100-natural.png" width="40px" height="40px"alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                       <li class="nav-item">
                           <a class="nav-link" href="Web/Cart.php">Shopping</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="Web/Profile.php">Profile</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="Web/Register.php">Register</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="Web/Login.php">Login</a>
                       </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Web/LogOut.php">Logout</a>
                       </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="Web/InvoiceList.php">View Order</a>
                           <ul>
                               <li> <a class="nav-link" href="Web/Waiting.php">Waiting</a></li>
                               <li> <a class="nav-link" href="Web/Shipping.php">Shipping</a></li>
                               <li> <a class="nav-link" href="Web/InvoiceList.php">Received</a></li>
                           </ul>
                       </li>
                       <li> <a href="#"><img src="images/icon_b.png" alt="#" /></a></li>
                       <?php 
                            session_start();
                            if(!empty($_SESSION['picture']))
                            {
                                 $path = $_SESSION['picture'];
                                 $pathSolute = substr($path, 3, strlen($path)-3);
                            }
                            else
                                $pathSolute = 'images/100-natural.png'
                        ?> 
                              
                       <li id="circle">
                           <img src="<?php echo $pathSolute;?>" width="30px" height="30px">
                       </li>
                   
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To Organic Farm!</span>
                      <h1>Mushroom Farm</h1>
                      <p>
                          Để khách hàng có thể dễ dàng tiếp cận nấm chuẩn tươi sạch trực tiếp từ nông trại Organic farm, 
                          mỗi ngày nấm tươi đều được vận chuyển thẳng từ trại nấm - cửa hàng chính - 
                          khách hàng để nấm luôn tươi mới và đạt giá trị dinh dưỡng tốt nhất cho sức khỏe. 
                          Giúp mỗi khách hàng luôn an tâm để chế biến 1001 món ăn ngon cho gia đình
                      </p>
                      <form class="Vegetable">
                        <input class="Vegetable_fom" placeholder="Mushroom" type="text" name=" Mushroom">
                        <button class="Search_btn">Search</button>
                       </form>
                      <a href="#">Contact Us</a> <a href="#">Mushroom</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                        <figure><img src="images/linhchi.png" width="100px" height="100px"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To Organic Farm!</span>
                      <h1>Vegetables Shop</h1>
                      <p>
                          Để khách hàng có thể dễ dàng tiếp cận nấm chuẩn tươi sạch trực tiếp từ nông trại Organic farm, 
                          mỗi ngày nấm tươi đều được vận chuyển thẳng từ trại nấm - cửa hàng chính - 
                          khách hàng để nấm luôn tươi mới và đạt giá trị dinh dưỡng tốt nhất cho sức khỏe. 
                          Giúp mỗi khách hàng luôn an tâm để chế biến 1001 món ăn ngon cho gia đình
                      </p>
                      <form class="Vegetable">
                        <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                        <button class="Search_btn">Search</button>
                       </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/linhchi.png" width="100px" height="100px"></figure>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To Organic Farm!</span>
                      <h1>Vegetables Shop</h1>
                      <p>
                          Để khách hàng có thể dễ dàng tiếp cận nấm chuẩn tươi sạch trực tiếp từ nông trại Organic farm, 
                          mỗi ngày nấm tươi đều được vận chuyển thẳng từ trại nấm - cửa hàng chính - 
                          khách hàng để nấm luôn tươi mới và đạt giá trị dinh dưỡng tốt nhất cho sức khỏe. 
                          Giúp mỗi khách hàng luôn an tâm để chế biến 1001 món ăn ngon cho gia đình
                      </p>
                      <form class="Vegetable">
                        <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                        <button class="Search_btn">Search</button>
                       </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/linhchi.png" width="100px" height="100px"></figure>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p>
              Organic farm là nông trại được quy tụ bởi những người yêu nấm với nhiều năm kinh nghiệm trong lĩnh vực nông nghiệp nói chung và nuôi trồng nấm nói riêng. 
              Organic farm bắt đầu từ 2014 với diện tích 500m2 Đến 2021, chúng tôi mở rộng nông trại lên 1000m2.
              Hiện nay, Organic farm đã phủ rộng hoạt động kinh doanh, phân phối tại một số nơi ở các khu vực Quảng Trị.

          </p> 
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
            <figure><img src="images/namtuoi.png" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->


<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                  <h2>Contact <strong class="llow">us</strong></h2>
                </div>
            </div>

        </div>
        <div class="white_color">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <form class="contact_bg">
                        <div class="row">
                          <div class="col-md-12">

                            <div class="col-md-12">
                              <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                            </div>
                            <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <button class="send">Send</button>
                            </div>
                          </div>
                    </form>
          </div>
            </div>
      
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15335.270755668405!2d108.2259013!3d16.07494765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1617343081939!5m2!1sen!2s" width="530" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           
           </div>
          </div>
        </div>

      </div>
    </div>
</div>
</div>
    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <a href="#" class="logo_footer"> <img src="images/100-natural.png" width="80px" height="40px"alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact 
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+84123456789) </li>
                          <li>
                            <a href="#"></a>hvphivh@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Newsletter</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2021 Design by <a href="https://html.design/">Web Design 0807A</a></p>
                </div>
              </div>
            </div>
          </footr>
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
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of the farm.
            function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                  lat: 40.645037,
                  lng: -73.880224
                },
              });

              var image = 'images/mapvku.png';
              var beachMarker = new google.maps.Marker({
                position: {
                  lat: 40.645037,
                  lng: -73.880224
                },
                map: map,
                icon: image
              });
            }
        </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>