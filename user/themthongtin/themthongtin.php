<?php
   include '../../config/xuly.php';

   $id = $_GET['id'];
   // Nếu đăng nhập
   session_start();
   if( !isset($_SESSION["user"]) ){
   header("location:../../index.html");
   }
   else {
           $now = time(); // Checking the time now when home page starts.
    
           if ($now > $_SESSION['expire']) {
               session_destroy();
               header("location: ../../index.html");
           }
           else 
           { 
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
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
      <meta name="author" content="GeeksLabs">
      <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
      <link rel="shortcut icon" href="img/favicon.png">
      <title>Trang quản trị</title>
      <!-- Bootstrap CSS -->
      <link href="../../private/admin/css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="../../private/admin/css/bootstrap-theme.css" rel="stylesheet">
      <!--external css-->
      <link rel="icon" type="image/png" href="../../private/login/images/icons/unnamed.jpg"/>
      <!-- font icon -->
      <link href="../../private/admin/css/elegant-icons-style.css" rel="stylesheet" />
      <link href="../../private/admin/css/font-awesome.min.css" rel="stylesheet" />
      <link href="../../private/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
      <link href="../../private/fontawesome/css/fontawesome.css" rel="stylesheet" />
      <!-- full calendar css-->
      <link href="../../private/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
      <link href="../../private/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
      <!-- easy pie chart-->
      <link href="../../private/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
      <!-- owl carousel -->
      <link rel="stylesheet" href="../../private/admin/css/owl.carousel.css" type="text/css">
      <link href="../../private/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
      <!-- Custom styles -->
      <link rel="stylesheet" href="../../private/admin/css/fullcalendar.css">
      <link href="../../private/admin/css/widgets.css" rel="stylesheet">
      <link href="../../private/admin/css/style.css" rel="stylesheet">
      <link href="../../private/admin/css/style-responsive.css" rel="stylesheet" />
      <link href="../../private/admin/css/xcharts.min.css" rel=" stylesheet">
      <link href="../../private/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
      <!-- ========================================================================================== -->
   </head>
   <body>
      <!-- container section start -->
      <section id="container" class="">
      <header class="header dark-bg">
         <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
         </div>
         <!--logo start-->
         <a href="../index.php?mod=trangchu&id=<?php echo $id; ?>" class="logo">Quản lý <span class="lite">Đề tài</span></a>
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
               <!-- alert notification end-->
               <!-- user login dropdown start-->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="profile-ava">
                  <img alt="" src="img/avatar1_small.jpg">
                  </span>
                  <span class="username">
                  <?php
                     include '../../config/xuly.php';
                     if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){
                  ?> 
                     Xin chào:  
                     <?php echo $_SESSION['user']; ?>
                     
                  <?php
                     $madetai = $_GET['madetai'];
                     }
                  ?>
                  </span>
                  <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu extended logout">
                     <div class="log-arrow-up"></div>
                     <li class="eborder-top">
                        <a href="../index.php?mod=doimatkhau&id=<?php echo $id; ?>"><i class="icon_profile"></i>Thay đổi mật khẩu</a>
                     </li>
                     <li>
                        <a href="../../logout.php"><i class="icon_key_alt"></i>Đăng xuất</a>
                     </li>
                  </ul>
               </li>
               <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
         </div>
      </header>
      <!--header end-->
       <input type="hidden" name="id" value="<?php echo $madetai; ?>">
      <!--sidebar start-->
      <aside>
         <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
            <li class="active">
               <a class="" href="../index.php?mod=detai&id=<?php echo $id; ?>">
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
                  <li><a class="" href="../index.php?mod=phancongnv&id=<?php echo $id; ?>">Phân chia đề tài</a></li>
                  <li><a class="" href="../index.php?mod=nguoidung&id=<?php echo $id; ?>">Chỉnh sửa người dùng</a></li>
               </ul>
            </li>
            <li class="sub-menu">
               <a href="../index.php?mod=linhvuc&id=<?php echo $id; ?>" class="">
               <i class="icon_genius"></i>
               <span>Lĩnh vực KHCN</span>
               </a>
            </li>
            <li>
               <a class="" href="../index.php?mod=hochamhocvi&id=<?php echo $id; ?>">
               <i class="icon_star"></i>
               <span>Học hàm học vị</span>
               </a>
            </li>
            <li>
               <a class="" href="../index.php?mod=chucvu&id=<?php echo $id; ?>">
               <i class="icon_piechart"></i>
               <span>Chức vụ</span>
               </a>
            </li>
            <li class="sub-menu">
               <a href="../index.php?mod=hoidong&id=<?php echo $id; ?>" class="">
               <i class="icon_table"></i>
               <span>Hội đồng khoa học</span>
               </a>
            </li>
            <!-- sidebar menu end-->
         </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
            <!--overview start-->
            <div class="row">
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br/>
                  <nav class="navbar navbar-default" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Thông tin thêm về đề tài</a></li>
                  <li><a href="javascript:;">Báo cáo thống kê</a></li>
                  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Quản lý đề tài <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!-- -------------------------------------------------------------------------------------------- -->
                        <li>
                          <a href="themthongtin.php?mod=thuyetminh&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">        Thuyết minh đề tài
                          </a>
                        </li>
<!-- -------------------------------------------------------------------------------------------- -->
                        <?php
                          $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$madetai'";
                          $result = mysqli_query($conn, $query);
                          if(mysqli_num_rows($result) > 0){
                              $i = 0;
                              while ($r = mysqli_fetch_assoc($result)){
                                  $tongkinhphi = $r['TongKinhPhi'];
                                  $chunhiem = $r['ChuNhiemDeTai'];
                                  $tendoivi = $r['TenDonViChuTri'];
                                  $sql = "SELECT * FROM danhsachdetaiduan WHERE TongKinhPhi = '$tongkinhphi' AND ChuNhiemDeTai = '$chunhiem' AND TenDonViChuTri = '$tendoivi'";
                                  $sql_query = mysqli_query($conn, $sql);
                                  if(mysqli_num_rows($sql_query) > 0)
                                  {
                        ?>
                                 <li><a href="themthongtin.php?mod=laphoidong&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Thành lập hội đồng</a></li>
                        <?php
                                 }else{
                        ?>
                                 <li><a href="themthongtin.php?mod=thongbao&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Thành lập hội đồng</a></li>
                        <?php
                                 }
                              }
                           }
                        ?>
  <!-- -------------------------------------------------------------------------------------------- -->
                        <?php
                          $query = "SELECT * FROM thanhlaphoidong WHERE MaDeTaiDuAn = '$madetai'";
                          $result = mysqli_query($conn, $query);
                          if(mysqli_num_rows($result) > 0){
                              $i = 0;
                              while ($r = mysqli_fetch_assoc($result)){
                                  $madetai = $r['MaDeTaiDuAn'];
                                  $soquyetdinh = $r['SoQuyetDinh'];
                                  $ngayquyetdinh = $r['NgayQuyetDinh'];
                                  $sql = "SELECT * FROM thanhlaphoidong WHERE MaDeTaiDuAn = '$madetai' AND SoQuyetDinh = '$soquyetdinh' AND NgayQuyetDinh = '$ngayquyetdinh'";
                                  $sql_query = mysqli_query($conn, $sql);
                                  if(mysqli_num_rows($sql_query) > 0)
                                  {
                        ?>
                                 <li><a href="themthongtin.php?mod=ketqua&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Họp hợp đồng xét chọn đề tài</a></li>
                        <?php
                                 }else{
                        ?>
                                 <li><a href="themthongtin.php?mod=thongbao&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Họp hợp đồng xét chọn đề tài</a></li>
                        <?php
                                 }
                              }
                           }
                        ?>
  <!-- -------------------------------------------------------------------------------------------- -->
                        <?php
                          $query = "SELECT * FROM hophoidong WHERE MaDeTai = '$madetai'";
                          $result = mysqli_query($conn, $query);
                          if(mysqli_num_rows($result) > 0){
                              $i = 0;
                              while ($r = mysqli_fetch_assoc($result)){
                                  $madetai = $r['MaDeTai'];
                                  $ketqua = $r['KetQua'];
                                  if($ketqua == 1)
                                  {
                        ?>
                                 <li><a href="themthongtin.php?mod=thamdinhkinhphi&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Thẩm định kinh phí</a></li>
                        <?php
                                 }else{
                        ?>
                                 <li><a href="themthongtin.php?mod=thongbao1&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Thẩm định kinh phí</a></li>
                        <?php
                                 }
                              }
                           }
                        ?>
  <!-- -------------------------------------------------------------------------------------------- -->
                        <?php
                          $query = "SELECT * FROM thamdinhkinhphi WHERE MaDeTai = '$madetai'";
                          $result = mysqli_query($conn, $query);
                          if(mysqli_num_rows($result) > 0){
                              $i = 0;
                              while ($r = mysqli_fetch_assoc($result)){
                                  $madetai = $r['MaDeTai'];
                                  $soquyetdinh = $r['SoQuyetDinh'];
                                  $sql = "SELECT * FROM thamdinhkinhphi WHERE MaDeTai = '$madetai' AND SoQuyetDinh = '$soquyetdinh'";
                                  $sql_query = mysqli_query($conn, $sql);
                                  if(mysqli_num_rows($sql_query) > 0)
                                  {
                        ?>
                                 <li><a href="themthongtin.php?mod=pheduyetdetai&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Họp hợp đồng xét chọn đề tài</a></li>
                        <?php
                                 }else{
                        ?>
                                 <li><a href="themthongtin.php?mod=thongbao&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">Họp hợp đồng xét chọn đề tài</a></li>
                        <?php
                                 }
                              }
                           }
                        ?>
  <!-- -------------------------------------------------------------------------------------------- -->
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
            <br/>
               <?php
                     define('ROOT', dirname(__FILE__) );
                      include"moddetai.php";
                     ?>
                  <p style="text-align: center;">Designed by <a href="https://bootstrapmade.com/">Nhóm 4</a></p>
               </div>
            </div>
         </section>
         <!--main content end-->
      </section>
      <!-- container section start -->
      <!-- javascripts -->
      <script src="../../../private/admin/js/jquery.js"></script>
      <script src="../../private/admin/js/jquery-ui-1.10.4.min.js"></script>
      <script src="../../private/admin/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="../../private/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="../../private/admin/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="../../private/admin/js/jquery.scrollTo.min.js"></script>
      <script src="../../private/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="../../private/admin/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="../../private/admin/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="../../private/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="../../private/admin/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <<script src="../../private/admin/js/fullcalendar.min.js"></script>
      <!-- Full Google Calendar - Calendar -->
      <script src="../../private/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
      <!--script for this page only-->
      <script src="../../private/admin/js/calendar-custom.js"></script>
      <script src="../../private/admin/js/jquery.rateit.min.js"></script>
      <!-- custom select -->
      <script src="../../private/admin/js/jquery.customSelect.min.js"></script>
      <script src="../../private/admin/assets/chart-master/Chart.js"></script>
      <!--custome script for all page-->
      <script src="../../private/admin/js/scripts.js"></script>
      <!-- custom script for this page-->
      <script src="../../private/admin/js/sparkline-chart.js"></script>
      <script src="../../private/admin/js/easy-pie-chart.js"></script>
      <script src="../../private/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="../../private/admin/js/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../../private/admin/js/xcharts.min.js"></script>
      <script src="../../private/admin/js/jquery.autosize.min.js"></script>
      <script src="../../private/admin/js/jquery.placeholder.min.js"></script>
      <script src="../../private/admin/js/gdp-data.js"></script>
      <script src="../../private/admin/js/morris.min.js"></script>
      <script src="../../private/admin/js/sparklines.js"></script>
      <script src="../../private/admin/js/charts.js"></script>
      <script src="../../private/admin/js/jquery.slimscroll.min.js"></script>
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