<?php

//action.php

include('../../config/js_database.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':TenDanhMuc'   => $_POST['TenDanhMuc'],
  ':ID'    => $_POST['ID']
 );

 $query = "
 UPDATE danhmuc 
 SET TenDanhMuc = :TenDanhMuc 
 WHERE ID = :ID
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM danhmuc 
 WHERE ID = '".$_POST["ID"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>