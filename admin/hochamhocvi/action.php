<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'quanlydetai');

$input = filter_input_array(INPUT_POST);

$tendanhmuc= mysqli_real_escape_string($connect, $input["TenDanhMuc"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE danhmuc 
 SET TenDanhMuc = '".$tendanhmuc."' 
 WHERE ID = '".$input["ID"]."'
 ";
// var_dump($query);
// return;
 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM danhmuc 
 WHERE ID = '".$input["ID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>