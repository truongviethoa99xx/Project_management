<h3 class="page-header"> <i class="fa fa-key"> Đổi mật khẩu </i></h3>
<br />
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="fa fa-key"></i>Đổi mật khẩu</li>
</ol>
   <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Đổi mật khẩu
              </header>
              <div class="panel-body">
                <?php
                    $id = $_GET['id'];
                ?>
                <!-- start form change password -->
                <form class="form-horizontal" role="form" method="POST" action="xulydoimatkhau.php?id=<?php echo $id; ?>">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Mật khẩu cũ</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputEmail1" placeholder="" name="txtOldpass">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Mật khẩu mới</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputEmail1" placeholder="" name="txtNewpass">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Nhập lại</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword1" placeholder="" name="txtNhaplai">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>
                  </div>
                </form>
              </div>
            </section>