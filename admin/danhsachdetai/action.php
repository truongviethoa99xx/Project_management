<?php

//action.php

include('../../config/js_database.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':TenDeTaiDuAn'   => $_POST['TenDeTaiDuAn'],
  ':MaDeTaiDuAn'    => $_POST['MaDeTaiDuAn']
 );

 $query = "
 UPDATE danhsachdetaiduan 
 SET TenDeTaiDuAn = :TenDeTaiDuAn 
 WHERE MaDeTaiDuAn = :MaDeTaiDuAn
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM danhsachdetaiduan 
 WHERE MaDeTaiDuAn = '".$_POST["MaDeTaiDuAn"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>