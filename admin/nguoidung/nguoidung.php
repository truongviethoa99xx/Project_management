<?php
    include '../config/xuly.php';
    $id = $_GET['id'];
?>
<h3 class="page-header"><i class="fa fa-users"> Người dùng</i></h3>
<br/>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="fa fa-user"></i>Người dùng</li>
</ol>
<!-- --------------------------------------------------------------------------------------------- -->
<?php
    $connect = mysqli_connect("localhost", "root", "", "quanlydetai");
    $query = "SELECT * FROM admin";
    $result = mysqli_query($connect, $query);
?>
<!-- ---------------------------------------------------------------------------------------------- -->
<div class="col-sm-12">
        <div class="row">
    <div class="col-sm-6">
        <section class="panel">
                <table id="editable_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Mã người dùng</th>
                            <th>Tên hiển thị</th>
                            <th>Tên đăng nhập</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($result))
                            {
                            echo '
                                <tr>
                                    <td>'.$row["ID"].'</td>
                                    <td>'.$row["TenHienThi"].'</td>
                                    <td>'.$row["TenDangNhap"].'</td>
                                </tr>
                            ';
                            }
                        ?>
                    </tbody>
                </table>
        </section>
    </div>
<script>  
        $(document).ready(function(){
            $('#editable_table').Tabledit({
                url:'./nguoidung/action.php',
                columns:{
                    identifier:[0, "ID"],
                    editable:[[1, 'TenHienThi'],[2, 'TenDangNhap']]
                },
                restoreButton:false,
                onSuccess:function(data, textStatus, jqXHR)
                {
                    if(data.action == 'delete')
                    {
                        $('#data.ID').remove();
                    }
                }
            });
        });  
     </script>
            <!-- ------------------------------------------------------------------ -->
            <div class="col-sm-6">
                <section class="panel">
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="nguoidung/xulythemuser.php?id=<?php echo $id; ?>">
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Họ và Tên <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="txtHoten" minlength="5" type="text" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cemail" class="control-label col-lg-2">Tài khoản <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cemail" type="text" name="txtTaikhoan" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Mật khẩu</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="curl" type="password" name="txtMatkhau" />
                                    </div>
                                </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="inputSuccess">Cấp quyền</label>
                            <div class="col-lg-10">
                                <label class="checkbox-inline">
                                    <input type="radio" name="radioCapquyen" id="inlineCheckbox1" value="1"> Admin
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radioCapquyen" id="inlineCheckbox2" value="2"> User
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Lưu</button>
                                <button class="btn btn-default" type="button"><a href="index.php?mod=trangchu&id=<?php echo $id; ?>"><i class="fa fa-undo"></i> Trở Lại</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
