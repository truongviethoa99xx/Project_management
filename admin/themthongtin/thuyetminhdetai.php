<script type="text/javascript">
    function XacNhan(){
        if(!window.confirm('Bạn đã thuyết minh đề tài thành công')){
            return false;
        }
}
</script>
<?php
    include '../../config/xuly.php';
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
<?php
                $id = $_GET['id'];
                $so = $_GET['madetai'];
                $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$so'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $i = 0;
                while ($r = mysqli_fetch_assoc($result)){
                    $i++;
                    $madetai = $r['MaDeTaiDuAn'];
                    $idLinhVuc = $r['LinhVuc'];
                    $idHocHam = $r['HocHamHocVi'];
                    $HocHam = getDanhMuc($conn, $idHocHam);
                    $LinhVuc = getDanhMuc($conn, $idLinhVuc);
                    $tendetai = $r['TenDeTaiDuAn'];
                    $ngaykhoitao = $r['NgayKhoiTaoDeTai'];
                    $tgthuchientu  = $r['ThoiGianThucHienTu'];
                    $den  = $r['ThoiGianThucHienDen'];
                    $tongkinhphi = $r['TongKinhPhi'];
                    $tungansach  = $r['TuNganSach'];
                    $nguonvonkhac  = $r['NguonVonKhac'];
                    $thuocchuongtrinh  = $r['ThuocChuongTrinh'];
                    $chunhiem  = $r['ChuNhiemDeTai'];
                    $dienthoaicoquan  = $r['DienThoaiCoQuan'];
                    $dienthoairieng  = $r['DienThoaiNhaRieng'];
                    $dtdd  = $r['DienThoaiDiDong'];
                    $email  = $r['Email'];
                    $tendonvi  = $r['TenDonViChuTri'];
                    $diachidonvi  = $r['DiaChiDonVi'];
                    $dienthoaidonvi  = $r['DienThoaiDonVi'];
                    $fax  = $r['FaxDonvi'];
              }
            }
?>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.html?id=<?php echo $id; ?>">Quản lý đề tài</a></li>
    <li><i class="icon_document_alt"></i>Thuyết minh đề tài</li>
</ol>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Đề tài : <?php echo $tendetai; ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="xulythuyetminhdetai.php?madetai=<?php echo $so; ?>&id=<?php echo $id; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mã đề tài</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?php echo $madetai; ?>" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên đề tài</label>
                        <div class="col-sm-10">
                            <input name="tendetai" type="text" value="<?php echo $tendetai; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Loại</label>
                            <div class="col-lg-10">
                                <label class="checkbox-inline">
                                    <input type="radio" name="loai" id="optionsRadios1" value="1" checked />
                                    Đề tài
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="loai" id="optionsRadios2" value="2" />
                                    Dự án
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Lĩnh Vực</label>
                            <div class="col-lg-10">
                                <label class="checkbox-inline">
                                    <input type="radio" name="linhvuc" id="optionsRadios1" value="4" checked />
                                    Khoa học tự nhiên
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="linhvuc" id="optionsRadios2" value="5" />
                                    Khoa học xã hội
                                </label>
                            </div>
                        </div>
                     <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Phương thức</label>
                            <div class="col-lg-10">
                                <label class="checkbox-inline">
                                    <input type="radio" name="phuongthuc" id="optionsRadios1" value="1" checked />
                                    Giao trực tiếp
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="phuongthuc" id="optionsRadios2" value="2" />
                                    Tuyển chọn
                                </label>
                            </div>
                        </div>
                    <!-- --------------------------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Thời gian thực hiện từ</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $tgthuchientu; ?>" type="datetime-local" class="form-control" name="thuchientu" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Đến</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $den; ?>" type="datetime-local" class="form-control" name="den" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tổng kinh phí</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $tongkinhphi; ?>" type="text" class="form-control" name="tongkinhphi" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><b>Trong đó: </b></label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control"> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Từ ngân sách sự nghiệp khoa học</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $tungansach; ?>" type="text" class="form-control" name="tungansach" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Từ các nguồn vốn khác</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $nguonvonkhac; ?>" type="text" class="form-control" name="nguonvonkhac" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Thuộc chương trình (nếu có)</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $thuocchuongtrinh; ?>" type="text" class="form-control" name="thuocchuongtrinh" />
                        </div>
                    </div>
<!-- -------------------------------------------------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><b>Chủ nhiệm đề tài/dự án:</b></label>
                        <div class="col-sm-10"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Họ và tên</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $chunhiem; ?>" type="text" class="form-control" name="hoten" />
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label">Học Hàm</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="hocham">
                                <?php
                                $query = "SELECT * FROM danhmuc WHERE Loai = 2";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 0;
                                    while ($r = mysqli_fetch_assoc($result)) {
                                        echo "<option value='$r[ID]'>$r[TenDanhMuc]</option>";
                                    }
                                }
                                ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại nhà riêng</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $dienthoairieng; ?>" type="text" class="form-control" name="dienthoairieng" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại cơ quan</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $dienthoaicoquan; ?>" type="text" class="form-control" name="dienthoaicoquan" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại di động</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $dtdd; ?>" type="text" class="form-control" name="dtdd" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Địa chỉ email</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $email; ?>" type="email" class="form-control" name="email" />
                        </div>
                    </div>
<!-- -------------------------------------------------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><b>Đơn vị chủ trì thực hiện đề tài/dự án:</b></label>
                        <div class="col-sm-10"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên đơn vị</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $tendonvi; ?>" type="text" class="form-control" name="tendonvi" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $diachidonvi; ?>" type="text" class="form-control" name="diachi" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $dienthoaidonvi; ?>" type="text" class="form-control" name="dienthoai" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fax</label>
                        <div class="col-sm-10">
                            <input value="<?php echo  $fax; ?>" type="text" class="form-control" name="fax" />
                        </div>
                    </div>
                    <button name="update" type="submit" class="btn btn-primary" style="margin-left: 550px;"><i class="fa fa-save"> Lưu</i></button>
                </form>
            </div>
        </section>
    </div>
</div>
