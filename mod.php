<?php
if (!defined("ROOT"))
{
    echo "You don't have permission to access this page!"; exit;
}
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
if($mod=="detai")
{
    include ROOT . "/danhsachdetai/danhsachdetai.php";
}
if($mod=="themdetai")
{
    include ROOT . "../danhsachdetai/themdetai.php";
}
if($mod=="nguoidung")
{
    include ROOT."../nguoidung/nguoidung.php";
}
if($mod=="linhvuc")
{
    include ROOT."../linhvuc/linhvuc.php";
}
if($mod=="hochamhocvi")
{
    include ROOT . "../hochamhocvi/hochamhocvi.php";
}
if($mod=="chucvu")
{
    include ROOT . "../chucvu/chucvu.php";
}
if($mod=="hoidong")
{
    include ROOT . "../hoidongkhoahoc/hoidongkhoahoc.php";
}
if($mod=="phanconglai")
{
    include ROOT . "../nguoidung/phanconglai.php";
}
if($mod=="phancongnv")
{
    include ROOT . "../nguoidung/phancong.php";
}
if($mod=="trangchu")
{
    include ROOT . "../trangchu.php";
}
if($mod=="doimatkhau")
{
    include ROOT . "../doimatkhau.php";
}
if($mod=="danhsachdetai")
{
    include ROOT . "../danhsachdetai.php";
}
if($mod=="suadetai")
{
    include ROOT . "../danhsachdetai/suadetai.php";
}
// ?>