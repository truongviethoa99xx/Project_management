<?php
    include '../config/xuly.php';
    $id = $_GET['id'];
?>
<h3 class="page-header"><i class="fa fa-calendar"> Phân công thụ lý đề tài</i></h3>
<br/>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="fa fa-calendar"></i>Phân công người thụ lý</li>
</ol>
<!-- --------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading no-border">
                Danh sách phân công
            </header>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th>Nhân viên đang thụ lý</th>
                        <th>Ngày Khởi Tạo</th>
                        <th>Phân công lại</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM danhsachdetaiduan";
                        $getNameQuery = $conn->prepare("SELECT TenHienThi FROM admin WHERE ID=?"); // tạo prepare statement query
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0){
                            $i = 0;
                            while ($r = mysqli_fetch_assoc($result)){
                                $i++;
                                $madetai = $r['MaDeTaiDuAn'];
                                $idNguoiQuanLy = $r['NguoiQuanLy']; // get id_nguoiQuanLy từ danhsachdetaiduan
                                $getNameQuery->bind_param("s", $idNguoiQuanLy); // gắn biến vào prepare statement query
                                $getNameQuery->execute(); // thực thi => view
                                $getNameQuery->bind_result($nguoiQuanLy); // gắn values vào biến
                                $getNameQuery->fetch(); // lấy 1 cột từ bảng thu được sau khi chạy câu query => $nguoiQuanLy = ....
                                $tendetai = $r['TenDeTaiDuAn'];
                                $ngaykhoitao = $r['NgayKhoiTaoDeTai'];
                            echo "<tr>";
                    ?>
                                <td><?php echo $madetai; ?></td>
                                <td><?php echo $tendetai; ?></td>
                                <td><?php echo $nguoiQuanLy; ?></td>
                                <td><?php echo $ngaykhoitao; ?></td>
                                <td>
                                    <a href="index.php?mod=phanconglai&madetai=<?php echo $madetai ?>&id=<?php echo $id; ?>"><i class="fa fa-folder-open">Chọn</i></a>
                                </td> 
                    <?php
                            echo "<tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>