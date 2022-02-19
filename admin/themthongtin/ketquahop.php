<?php
    include '../../config/xuly.php';
    $id = $_GET['id'];
?>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?id=<?php echo $id; ?>">Quản lý đề tài</a></li>
    <li><i class="fa fa-file"></i><a href="index.php?mod=detai&id=<?php echo $id; ?>"> Kết quả họp hội đồng xét giao trực tiếp hoặc tuyển chọn </a></li>
</ol>
<?php
                $so = $_GET['madetai'];
                $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$so'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $i = 0;
                while ($r = mysqli_fetch_assoc($result)){
                    $i++;
                    $tendetai = $r['TenDeTaiDuAn'];
              }
            }
?>
<!-- ----------------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Đề tài : <?php echo $tendetai; ?>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="xulyketqua.php?madetai=<?php echo $so ?>&id=<?php echo $id; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b>Thời gian họp</b></label>
                            <div class="col-sm-10">
                              <input type="datetime-local" class="form-control" name="txtTghop">
                            </div>
                        </div>
                <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess"><b>Kết quả: </b></label>
                    <div class="col-lg-10">
                        <label class="checkbox-inline">
                            <input type="radio" name="radioKetqua" id="optionsRadios1" value="1" checked />
                                Cho phép
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="radioKetqua" id="optionsRadios2" value="2" />
             	                Không cho phép
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>