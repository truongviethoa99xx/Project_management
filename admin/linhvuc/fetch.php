<?php

//fetch.php

include('../../config/js_database.php');

$column = array("ID", "TenDanhMuc", "Loai");

$query = "SELECT * FROM danhmuc";

if (isset($_POST["search"]["value"])) {
	if($_POST["search"]["value"] != "" && strlen($_POST["search"]["value"]) > 0)
	{
	 $query .= '
	 WHERE TenDanhMuc LIKE "%'.$_POST["search"]["value"].'%" ';
	}
}
$query .= ' having Loai=1';
if(isset($_POST["order"]))
{
	if ($_POST["order"] != "" && strlen($_POST["order"]) > 0) {
		$query .= ' ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
	}
}
else
{
 $query .= ' ORDER BY id DESC ';
}
$query1 = 'having Loai=1';

if($_POST["length"] != -1)
{
 $query1 = ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}




$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['ID'];
 $sub_array[] = $row['TenDanhMuc'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM danhmuc";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data,
 'query'	=> $query,
 'search_input' => isset($_POST["search"])
);

echo json_encode($output);

?>
