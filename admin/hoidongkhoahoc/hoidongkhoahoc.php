<?php
    include '../config/xuly.php';
    $id = $_GET['id'];
    function getDanhMuc($conn, $id='')
    {
        $sql = "SELECT TenDanhMuc FROM danhmuc WHERE ID=?";
        $getNameQuery = $conn->prepare($sql);
        $getNameQuery->bind_param("s", $id); 
        $getNameQuery->execute(); 
        $getNameQuery->bind_result($name); 
        $getNameQuery->fetch();
        return $name;
    }
?>
<h3 class="page-header"><i class="fa fa-table"> Hội đồng khoa học</i></h3>
<br />
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="icon_table"></i>Hội đồng</li>
</ol>
<!-- ------------------------------------------------------------------------------------------ -->
<div class="col-sm-12">
    <div class="col-sm-6">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="hoidongkhoahoc/xulythemhoidong.php?id=<?php echo $id; ?>">
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Họ và Tên <span class="required"></span></label>
                            <div class="col-lg-10">
                                 <input class="form-control" id="cname" name="txtHoten" minlength="5" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Giới tính</label>
                            <div class="col-lg-10">
                                <label class="checkbox-inline">
                                    <input type="radio" name="txtGioitinh" id="optionsRadios1" value="1" checked />
                                        Nam
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="txtGioitinh" id="optionsRadios2" value="2" />
                                    Nữ
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Học hàm, học vị</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot13" name="txtHocham"> 
                                    <?php
                                        $hocham = "SELECT * FROM danhmuc WHERE Loai = 2";
                                        $result_hocham = mysqli_query($conn, $hocham);
                                        if (mysqli_num_rows($result_hocham) > 0) {
                                            $i = 0;
                                            while ($r = mysqli_fetch_assoc($result_hocham)) {
                                            echo "<option value='$r[ID]'>$r[TenDanhMuc]</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Chức vụ</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot13" name="txtChucvu"> 
                                    <?php
                                        $chucvu = "SELECT * FROM danhmuc WHERE Loai = 3";
                                        $result_chucvu = mysqli_query($conn, $chucvu);
                                        if (mysqli_num_rows($result_chucvu) > 0) {
                                            $i = 0;
                                            while ($r = mysqli_fetch_assoc($result_chucvu)) {
                                            echo "<option value='$r[ID]'>$r[TenDanhMuc]</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Lĩnh vực</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot13" name="txtLinhvuc"> 
                                    <?php
                                        $linhvuc = "SELECT * FROM danhmuc WHERE Loai = 1";
                                        $result_linhvuc = mysqli_query($conn, $linhvuc);
                                        if (mysqli_num_rows($result_linhvuc) > 0) {
                                            $i = 0;
                                            while ($r = mysqli_fetch_assoc($result_linhvuc)) {
                                            echo "<option value='$r[ID]'>$r[TenDanhMuc]</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Nơi công tác <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtNoicongtac" minlength="5" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Địa chỉ <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtDiachi" minlength="5" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Số điện thoại <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtSodienthoai" minlength="5" type="" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Email <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtEmail" minlength="5" type="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                                <button class="btn btn-default" type="button"><a href="index.php?mod=trangchu&id=<?php echo $id; ?>"><i class="fa fa-undo"></i> Trở Lại</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
    $connect = mysqli_connect("localhost", "root", "", "quanlydetai");
    $query = "SELECT * FROM hoidongkhoahoc";
    $result = mysqli_query($connect, $query);
?>
<!-- ---------------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-sm-12" style="text-align: center;">
        <section class="panel">
                <table id="editable_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Mã số</th>
                            <th style="text-align: center;">Họ và tên</th>
                            <th style="text-align: center;">Học hàm, học vị</th>
                            <th style="text-align: center;">Chức vụ</th>
                            <th style="text-align: center;">Lĩnh vực</th>
                            <th style="text-align: center;">Số điện thoại</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                $idLinhVuc = $row['LinhVuc'];
                                $idHocHam = $row['HocHamHocVi'];
                                $idChucVu = $row['ChucVu'];
                                $HocHam = getDanhMuc($conn, $idHocHam);
                                $ChucVu = getDanhMuc($conn, $idChucVu);
                                $LinhVuc = getDanhMuc($conn, $idLinhVuc);
                            echo '
                                <tr>
                                    <td>'.$row["ID"].'</td>
                                    <td>'.$row["HoTen"].'</td>
                                    <td>'.$HocHam.'</td>
                                    <td>'.$ChucVu.'</td>
                                    <td>'.$LinhVuc.'</td>
                                    <td>'.$row["DienThoai"].'</td>
                                </tr>
                            ';
                            }
                        ?>
                    </tbody>
                </table>
        </section>
    </div>
</div>
<script>  
        $(document).ready(function(){
            $('#editable_table').Tabledit({
                url:'./hoidongkhoahoc/action.php',
                columns:{
                    identifier:[0, "ID"],
                    editable:[[1, 'HoTen'],[5, 'DienThoai']]
                },
                restoreButton:false,
                onSuccess:function(data, textStatus, jqXHR)
                {
                    if(data.action == 'delete')
                    {
                        $('#'+data.ID).remove();
                    }
                }
            });
        });  
     </script>

