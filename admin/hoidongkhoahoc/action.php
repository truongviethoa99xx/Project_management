<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'quanlydetai');

$input = filter_input_array(INPUT_POST);

$hoten= mysqli_real_escape_string($connect, $input["HoTen"]);
$dienthoai= mysqli_real_escape_string($connect, $input["DienThoai"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE hoidongkhoahoc 
 SET HoTen = '".$hoten."',DienThoai = '".$dienthoai."'
 WHERE ID = '".$input["ID"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM hoidongkhoahoc 
 WHERE ID = '".$input["ID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>