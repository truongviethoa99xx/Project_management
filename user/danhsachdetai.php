<h3 class="page-header"><i class="fa fa-folder"> Đề tài</i></h3>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
    <li><i class="fa fa-file"></i>Đề tài</li>
</ol>
<!-- -------------------------------------------------------------------------------------------- -->
<div class="col-sm-12">
    <div class="row">
        <section class="panel">
            <header class="panel-heading no-border">
                Danh sách đề tài đã khởi tạo
            </header>
            <!-- Start  table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Mã đề tài</th>
                            <th style="text-align: center;">Người thụ lý</th>
                            <th style="text-align: center;">Tên đề tài</th>
                            <th style="text-align: center;">Ngày khởi tạo</th>
                            <th style="text-align: center;">Chọn</th>
                            <th style="text-align: center;">Trễ hạn giai đoạn</th>
                            <th style="text-align: center;">Trễ hạn đề tài</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../config/xuly.php';
                        ?>
                        <?php
                            $id = $_GET['id'];
                            $query = "SELECT * FROM danhsachdetaiduan WHERE NguoiQuanLy = '$id'";
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
                            <td rowspan="2"><?php echo $madetai; ?></td>
                            <td><?php echo $nguoiQuanLy; ?></td>
                            <td><?php echo $tendetai; ?></td>
                            <td><?php echo $ngaykhoitao; ?></td>
                            <td>
                                <a href="themthongtin/themthongtin.php?madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>"><i class="fa fa-folder-open">Chọn</i></a>
                            </td>
                            <td style="text-align: center;">
                                <a href="trehan/trehangiaidoan.php"><i class="fa fa-edit"></i>Xem</a>
                            </td>
                            <td style="text-align: center;">
                                <a href="trehan/trehangiaidoan.php"><i class="fa fa-edit"></i>Xem</a>
                            </td> 
                        <?php
                                    echo "<tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <!-- end table -->
                <nav aria-label="Page navigation example">
                    <div style="text-align: center;">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </section>
    </div>
</div>
