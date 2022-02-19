<?php
   // gọi file xuly
   include '../config/xuly.php';
   // Nếu đăng nhập
   session_start();
   if( !isset($_SESSION["user"]))
   {
      header("location:../index.html");
   }
   else{
      $now = time(); // Hàm kiểm tra thời gian tự động đăng xuất
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
      <!-- owl carousel -->
      <link rel="stylesheet" href="../private/admin/css/owl.carousel.css" type="text/css">
      <link href="../private/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
      <!-- Custom styles -->
      <link rel="stylesheet" href="../private/admin/css/fullcalendar.css">
      <link href="../private/admin/css/widgets.css" rel="stylesheet">
      <link href="../private/admin/css/style.css" rel="stylesheet">
      <link href="../private/admin/css/style-responsive.css" rel="stylesheet" />
      <link href="../private/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
      <!-- Edit table -->
      <script src="../private/admin/js/jquery.min.js"></script>
      <link rel="stylesheet" href="../private/admin/css/bootstrap1.min.css" />  
      <!-- ---End Edit table -->
      <!-- ======================================================================== -->
   </head>
         <?php
            $id = $_GET['id'];
         ?>
   <body>
      <!-- container section start -->
      <section id="container">
      <header class="header dark-bg">
         <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
         </div>
         <!--logo start-->
         <a href="index.php?mod=trangchu&id=<?php echo $id; ?>" class="logo">Quản lý <span class="lite">Đề tài</span></a>
         <!--logo end-->
         <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
               <!-- user login dropdown start-->
               <li class="dropdown">
                  <!-- tạo nút xổ item tài khoản -->
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <!-- chèn hình đăng nhâ[j] -->
                     <span class="profile-ava">
                        <img alt="" src="../private/admin/img/avatar1_small.jpg">
                     </span>
                     <!-- lúc đăng nhập thì nó hiện tên người đăng nhập -->
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
                        <a href="index.php?mod=doimatkhau&id=<?php echo $id; ?>"><i class="icon_profile"></i>Thay đổi mật khẩu</a>
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
               <li class="active">
                  <a class="" href="index.php?mod=detai&id=<?php echo $id; ?>">
                     <i class="fa fa-folder"></i>
                     <span>Danh sách đề tài</span>
                  </a>
               </li>
               <li class="sub-menu">
                  <a href="#;" class="">
                     <i class="fa fa-users"></i>
                     <span>Người dùng</span>
                     <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="index.php?mod=phancongnv&id=<?php echo $id; ?>">Phân chia đề tài</a></li>
                     <li><a class="" href="index.php?mod=nguoidung&id=<?php echo $id; ?>">Chỉnh sửa người dùng</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="index.php?mod=linhvuc&id=<?php echo $id; ?>" class="">
                     <i class="icon_genius"></i>
                     <span>Lĩnh vực KHCN</span>
                  </a>
               </li>
               <li>
                  <a class="" href="index.php?mod=hochamhocvi&id=<?php echo $id; ?>">
                     <i class="icon_star"></i>
                     <span>Học hàm học vị</span>
                  </a>
               </li>
               <li>
                  <a class="" href="index.php?mod=chucvu&id=<?php echo $id; ?>">
                     <i class="icon_piechart"></i>
                     <span>Chức vụ</span>
                  </a>
               </li>
               <li class="sub-menu">
                  <a href="index.php?mod=hoidong&id=<?php echo $id; ?>" class="">
                     <i class="icon_table"></i>
                     <span>Hội đồng khoa học</span>
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
      <!--Xổ menu-->
      <script src="../private/admin/js/jquery.scrollTo.min.js"></script>
      <script src="../private/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="../private/admin/js/scripts.js"></script>
      <!--End Xổ menu-->
      <!-- Editable -->
      <script src="../private/editable/jquery.tabledit.min.js"></script>
      <!-- =============================================================================== -->
      <script src="../private/javascript/jquery.dataTables.min.js"></script>
      <script src="../private/javascript/dataTables.bootstrap.min.js"></script>  
      <link rel="stylesheet" href="../private/javascript/dataTables.bootstrap.min.css" />
      <script src="../private/javascript/bootstrap.min.js"></script>
      <script src="../private/javascript/tabledit.min.js"></script>
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