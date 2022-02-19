<?php
   include '../config/xuly.php';
   // Nếu đăng nhập
   session_start();
   if( !isset($_SESSION["user"]))
   {
      header("location:../index.html");
   }
   else{
      $now = time(); // Checking the time now when home page starts.
      if ($now > $_SESSION['expire']) 
      {
         session_destroy();
         header("location: ../index.html");
      }
      else{ 
         //Starting this else one [else1])
      }
   }
?>
<?php
   if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){
      //nếu có session tên us thì ta thực hiện lệnh dưới
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- head dùng để khai báo file css -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
      <meta name="author" content="GeeksLabs">
      <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
      <link rel="shortcut icon" href="img/favicon.png">
      <!-- Tiêu đề trang -->
      <title>Trang quản trị</title>
      <!-- Bootstrap CSS -->
      <link href="../private/admin/css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="../private/admin/css/bootstrap-theme.css" rel="stylesheet">
      <!--external css-->
      <link rel="icon" type="image/png" href="../private/login/images/icons/unnamed.jpg"/>
      <!-- font icon -->
      <link href="../private/admin/css/elegant-icons-style.css" rel="stylesheet" />
      <link href="../private/admin/css/font-awesome.min.css" rel="stylesheet" />
      <link href="../private/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
      <link href="../private/fontawesome/css/fontawesome.css" rel="stylesheet" />
      <!-- full calendar css-->
      <link href="../private/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
      <link href="../private/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
      <!-- easy pie chart-->
      <link href="../private/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
      <!-- owl carousel -->
      <link rel="stylesheet" href="../private/admin/css/owl.carousel.css" type="text/css">
      <link href="../private/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
      <!-- Custom styles -->
      <link rel="stylesheet" href="../private/admin/css/fullcalendar.css">
      <link href="../private/admin/css/widgets.css" rel="stylesheet">
      <link href="../private/admin/css/style.css" rel="stylesheet">
      <link href="../private/admin/css/style-responsive.css" rel="stylesheet" />
      <link href="../private/admin/css/xcharts.min.css" rel=" stylesheet">
      <link href="../private/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
      <!-- ============================================================================================= -->
   </head>
   <body>
      <!-- container section start -->
      <section id="container">
      <header class="header dark-bg">
         <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
         </div>
         <!--logo start-->
         <a href="index.php?mod=trangchu" class="logo">Quản lý <span class="lite">Đề tài</span></a>
         <!--logo end-->
         <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
               <li>
                  <form class="navbar-form">
                     <input class="form-control" placeholder="Search" type="text">
                  </form>
               </li>
            </ul>
            <!--  search form end -->
         </div>
         <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
               <!-- user login dropdown start-->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <span class="profile-ava">
                        <img alt="" src="img/avatar1_small.jpg">
                     </span>
                     <span class="username">
                        <?php
                           include '../config/xuly.php';
                           if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){
                        ?> 
                           Xin chào:  
                           <?php echo $_SESSION['user']; ?>
                           
                        <?php
                           }
                        ?>
                     </span>
                  </a>
                  <ul class="dropdown-menu extended logout">
                     <div class="log-arrow-up"></div>
                     <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i>Thay đổi mật khẩu</a>
                     </li>
                     <li>
                        <a href="../logout.php"><i class="icon_key_alt"></i>Đăng xuất</a>
                     </li>
                  </ul>
               </li>
               <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
         </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
         <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
               <?php
                  $id = $_GET['id'];
               ?>
               <li class="active">
                  <a class="" href="index.php?mod=danhsachdetai&id=<?php echo $id; ?>">
                     <i class="fa fa-folder"></i>
                     <span>Danh sách đề tài</span>
                  </a>
               </li>
               
            </ul>
            <!-- sidebar menu end-->
         </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
            <!--overview start-->
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <br/>
                  <!-- Page start -->
                     <?php
                        define('ROOT', dirname(__FILE__) );
                        include"../mod.php";
                     ?>
                  <!-- Page end  -->
                  <p style="text-align: center;">Designed by <a href="https://bootstrapmade.com/">Nhóm 4</a></p>
               </div>
            </div>
         </section>
         <!--main content end-->
      </section>
      <!-- javascripts -->
      <script src="../private/admin/js/jquery.js"></script>
      <script src="../private/admin/js/jquery-ui-1.10.4.min.js"></script>
      <script src="../private/admin/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="../private/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="../private/admin/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="../private/admin/js/jquery.scrollTo.min.js"></script>
      <script src="../private/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="../private/admin/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="../private/admin/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="../private/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="../private/admin/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <<script src="../private/admin/js/fullcalendar.min.js"></script>
      <!-- Full Google Calendar - Calendar -->
      <script src="../private/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
      <!--script for this page only-->
      <script src="../private/admin/js/calendar-custom.js"></script>
      <script src="../private/admin/js/jquery.rateit.min.js"></script>
      <!-- custom select -->
      <script src="../private/admin/js/jquery.customSelect.min.js"></script>
      <script src="../private/admin/assets/chart-master/Chart.js"></script>
      <!--custome script for all page-->
      <script src="../private/admin/js/scripts.js"></script>
      <!-- custom script for this page-->
      <script src="../private/admin/js/sparkline-chart.js"></script>
      <script src="../private/admin/js/easy-pie-chart.js"></script>
      <script src="../private/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="../private/admin/js/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../private/admin/js/xcharts.min.js"></script>
      <script src="../private/admin/js/jquery.autosize.min.js"></script>
      <script src="../private/admin/js/jquery.placeholder.min.js"></script>
      <script src="../private/admin/js/gdp-data.js"></script>
      <script src="../private/admin/js/morris.min.js"></script>
      <script src="../private/admin/js/sparklines.js"></script>
      <script src="../private/admin/js/charts.js"></script>
      <script src="../private/admin/js/jquery.slimscroll.min.js"></script>
      <script>
         //knob
         $(function() {
           $(".knob").knob({
             'draw': function() {
               $(this.i).val(this.cv + '%')
             }
           })
         });
         
         //carousel
         $(document).ready(function() {
           $("#owl-slider").owlCarousel({
             navigation: true,
             slideSpeed: 300,
             paginationSpeed: 400,
             singleItem: true
         
           });
         });
         
         //custom select box
         
         $(function() {
           $('select.styled').customSelect();
         });
         
         /* ---------- Map ---------- */
         $(function() {
           $('#map').vectorMap({
             map: 'world_mill_en',
             series: {
               regions: [{
                 values: gdpData,
                 scale: ['#000', '#000'],
                 normalizeFunction: 'polynomial'
               }]
             },
             backgroundColor: '#eef3f7',
             onLabelShow: function(e, el, code) {
               el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
             }
           });
         });
      </script>
   </body>
</html>