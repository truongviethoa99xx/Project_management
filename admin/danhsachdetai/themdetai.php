<?php
 include "../config/xuly.php"; 
 $id = $_GET['id'];
?>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="fa fa-file"></i><a href="index.php?mod=detai&id=<?php echo $id; ?>"> Đề tài</a></li>
    <li><i class="fa fa-file"></i>Thêm đề tài</li>
</ol>
<!-- ------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thông tin đề tài
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="danhsachdetai/xulythemdetai.php?id=<?php echo $id; ?>">
                        <div class="form-group">
                            <!-- dùng để tự động mã đề tài -->
                            <?php
                                $ma = date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $ma = date("dmY");
                                $ma = $ma."%";
                                $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn LIKE '$ma';";
                                $result = mysqli_query($conn, $query);
                                
                                $count = 0;
                                $ma = date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $ma = date("dmY");
                                if(mysqli_num_rows($result) > 0){
                                    $count = mysqli_num_rows($result);
                                    $ma = $ma.$count;
                                }
                            ?>
                            <label for="cname" class="control-label col-lg-2">Mã đề tài<span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" value="<?php echo $ma; ?>" id="cname" name="MaDeTai" minlength="5" type="text" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">Tên đề tài <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cemail" type="text" name="TenDeTai" required  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Lĩnh vực</label>
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
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Người thụ lý <span class="required">*</span></label>
                            <select class="form-control" name="nguoithuly" style="width:930px;height: 30px; margin-left: 15px;"> 
                                <?php
                                    $query = "SELECT * FROM admin";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                            echo "<option value='$r[ID]'>$r[TenHienThi]</option>";
                                        }
                                    }
                                ?>

                        </div>
                        </div>
                    </select>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                                <button class="btn btn-default" type="button"><a href="index.php?mod=trangchu"><i class="fa fa-undo"></i> Trở Lại</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>