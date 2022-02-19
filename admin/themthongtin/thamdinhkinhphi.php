<?php
  include '../../config/xuly.php';
  $id = $_GET['id'];
?>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?id=<?php echo $id; ?>">Quản lý đề tài</a></li>
    <li><i class="fa fa-file"></i>Thẩm định kinh phí</li>
</ol>
<?php
                $madetai = $_GET['madetai'];
                $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$madetai'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $i = 0;
                while ($r = mysqli_fetch_assoc($result)){
                    $i++;
                    $tendetai = $r['TenDeTaiDuAn'];
              }
            }
?>
<!-- ------------------------------------------------------------------------------------- -->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Đề tài: <?php echo $tendetai; ?>
      </header>
      <div class="panel-body">
          <div class="form">
            <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="xulythamdinhkinhphi.php?madetai=<?php echo $madetai ?>&id=<?php echo $id; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>Ngày thẩm định</b></label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control" name="txtNgaythamdinh">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Quyết định thành lập tổ thẩm định kinh phí</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtQuyetdinh"> 
                  </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"><b>Ngày</b></label>
                  <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" name="txtNgay">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tổng kinh phí sau thẩm định</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtTongkinhphi"> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                  </div>
                </div>
          </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- ---------------------------------------------------------------------- -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel-body">
        <section class="panel">
            <header class="panel-heading no-border">
                Thẩm định kinh phí đề tài :<?php echo $tendetai; ?>
            </header>
            <!-- Start  table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Mã đề tài</th>
                            <th style="text-align: center;">Ngày thẩm định</th>
                            <th style="text-align: center;">Số quyết định</th>
                            <th style="text-align: center;">Ngày Quyết định</th>
                            <th style="text-align: center;">Tổng kinh phí được duyệt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM thamdinhkinhphi WHERE MaDeTai = '$madetai'";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                $i = 0;
                                while ($r = mysqli_fetch_assoc($result)){
                                    $i++;
                                    $ngaythamdinh = $r['NgayThamDinh'];
                                    $soquyetdinh = $r['SoQuyetDinh'];
                                    $ngayquyetdinh = $r['NgayQuyetDinh'];
                                    $tongkinhphi = $r['TongKinhPhiDuocDuyet'];
                                    echo "<tr>";
                        ?>
                            <td rowspan="2"><?php echo $madetai; ?></td>
                            <td><?php echo $ngaythamdinh; ?></td>
                            <td><?php echo $soquyetdinh; ?></td>
                            <td><?php echo $ngayquyetdinh; ?></td>
                            <td><?php echo $tongkinhphi; ?></td>
                        <?php
                                    echo "<tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <!-- end table -->
        </section>
      </div>
    </div>
</div>
