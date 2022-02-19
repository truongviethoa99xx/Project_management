<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'quanlydetai');

$input = filter_input_array(INPUT_POST);

$tenhienthi= mysqli_real_escape_string($connect, $input["TenHienThi"]);
$tendangnhap= mysqli_real_escape_string($connect, $input["TenDangNhap"]);



if($input["action"] === 'edit')
{
 $query = "
 UPDATE admin 
 SET TenHienThi = '".$tenhienthi."', TenDangNhap = '".$tendangnhap."'
 WHERE ID = '".$input["ID"]."'
 ";
// var_dump($query);
// return;
 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM admin 
 WHERE ID = '".$input["ID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>