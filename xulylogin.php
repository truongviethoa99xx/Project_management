<?php
   session_start();
   include 'config/xuly.php';
   // lấy file xuly.php
   if( isset($_POST["btn_submit"]) && $_POST["txtUsername"] !='' && $_POST["txtPassword"] !='' ){
      // kiểm tra xem thử input có nhập giá trị hay không
   	$username = $_POST["txtUsername"];
   	$password = $_POST["txtPassword"];
      //lấy giá trị ở form login
   	$password = md5($password);
      //mã hóa mật khẩu
      //------------------------------------Start phân quyền -------------------------------//
   	$sql = "SELECT *FROM admin WHERE TenDangNhap = '$username' AND MatKhau = '$password' ";
   	$user = mysqli_query($conn, $sql);
   	if(mysqli_num_rows($user)>0){
   		$phanquyen = "SELECT *FROM admin WHERE TenDangNhap = '$username' ";
   		$result = mysqli_query($conn, $phanquyen);
   		if(mysqli_num_rows($result) > 0){
   			while ($r = mysqli_fetch_assoc($result)){
               // Lấy giá trị một row trong database
   				$phanquyen = $r['PhanQuyen'];
   				$id =$r['ID'];
   			}
   		}
   		if($phanquyen == 1 )
   		{
   			$_SESSION["user"] = $username;
   			$_SESSION["ID"] = $r['ID'];
   			$_SESSION['start'] = time();
   			$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
   			$_SESSION["TenHienThi"] = $r['TenHienThi'];
            header("location: admin/index.php?mod=trangchu&id=$id");
         // nếu phân quyền bằng 1 ==> admin
   		}
   		else{
            $_SESSION["user"] = $username;
            $_SESSION["ID"] = $r['ID'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
            $_SESSION["TenHienThi"] = $r['TenHienThi'];
   			header("location: user/index.php?mod=trangchu&id=$id");
            // nếu phân quyền khác 1 ==> user
   		}
   	}else{
   ?>
         <script type="text/javascript">
            alert("Tên Truy cập Hoặc Mật Khẩu chưa chính Xác.Vui Lòng Nhập Lại!");
            window.location = "index.html";
         </script>
   <?php
         exit();
      }
      //----------------------------------End phân quyền-------------------------------------//
   }else{
      header("location: index.html");
   }
   ?>
?>