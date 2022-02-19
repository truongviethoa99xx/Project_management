<?php
if (!defined("ROOT"))
{
    echo "You don't have permission to access this page!"; exit;
}
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
if($mod=="thuyetminh")
{
    include ROOT . "/thuyetminhdetai.php";
}
if($mod=="laphoidong")
{
    include ROOT . "/laphoidong.php";
}
if($mod=="ketqua")
{
    include ROOT."/ketquahop.php";
}
if($mod=="thamdinhkinhphi")
{
    include ROOT."/thamdinhkinhphi.php";
}
if($mod=="thongbao")
{
    include ROOT . "../thongbao.php";
}
if($mod=="pheduyetdetai")
{
    include ROOT . "/pheduyetdetai.php";
}
if($mod=="thongbao1")
{
    include ROOT . "../thongbao2.php";
}
// if($mod=="phancongnv")
// {
//     include ROOT . "../phancong.php";
// }
// if($mod=="trangchu")
// {
//     include ROOT . "../trangchu.php";
// }
// if($mod=="trehangiaidoan")
// {
//     include ROOT . "../trehan/trehangiaidoan.php";
// }
// if($mod=="trehandetai")
// {
//     include ROOT . "../trehan/trehandetai.php";
// }
// ?>