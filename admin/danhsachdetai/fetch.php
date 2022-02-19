<?php

//fetch.php

include('../../config/js_database.php');

$column = array("MaDeTaiDuAn", "TenDeTaiDuAn");

$query = "SELECT * FROM danhsachdetaiduan";
// chức năng tìm kiếm
if (isset($_POST["search"]["value"])) {
	if($_POST["search"]["value"] != "" && strlen($_POST["search"]["value"]) > 0)
	{
	 $query .= '
	 WHERE TenDeTaiDuAn LIKE "%'.$_POST["search"]["value"].'%" ';
	}
}
$query .= '';
if(isset($_POST["order"]))
{
	if ($_POST["order"] != "" && strlen($_POST["order"]) > 0) {
		$query .= ' ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
	}
}
else
{
 $query .= ' ORDER BY MaDeTaiDuAn DESC ';
}
$query1 = '';

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

function getDanhMuc($conn, $id='')
    {
        $sql = "SELECT TenDanhMuc FROM admin WHERE ID=?";
        $getNameQuery = $conn->prepare($sql);
        $getNameQuery->bind_param("s", $id); 
        $getNameQuery->execute(); 
        $getNameQuery->bind_result($name); 
        $getNameQuery->fetch();
        return $name;
    }

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['MaDeTaiDuAn'];
 $sub_array[] = $row['TenDeTaiDuAn'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM danhsachdetaiduan";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data,
 // 'query'	=> $query,
 'search_input' => isset($_POST["search"])
);

echo json_encode($output);

?>
