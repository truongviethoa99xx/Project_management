<?php
    include '../config/xuly.php';
    $id = $_GET['id'];
?>
<h3 class="page-header"><i class="fa fa-star"> Học hàm học vị</i></h3>
<br/>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="icon_star"></i>Học hàm học vị</li>
</ol>
<!-- ------------------------------------------------------------------------------------------- -->
<?php
    $connect = mysqli_connect("localhost", "root", "", "quanlydetai");
    $query = "SELECT * FROM danhmuc WHERE Loai =2";
    $result = mysqli_query($connect, $query);
?>
<!-- ---------------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-sm-6">
        <section class="panel"> 
                <table style="text-align: center;" id="editable_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Mã học hàm học vị</th>
                            <th style="text-align: center;">Tên học hàm học vị</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($result))
                            {
                            echo '
                                <tr>
                                    <td>'.$row["ID"].'</td>
                                    <td>'.$row["TenDanhMuc"].'</td>
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
                url:'./chucvu/action.php',
                columns:{
                    identifier:[0, "ID"],
                    editable:[[1, 'TenDanhMuc']]
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
<!-- ---------------------------------------------------------------------------------------------- -->
    <div class="col-sm-6">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="hochamhocvi/xulyhhhv.php?id=<?php echo $id; ?>">
                        <div class="form-group">
                             <label for="cname" class="control-label col-lg-2">Nhập tên danh mục <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtDanhmuc" minlength="5" type="text" required />
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
        </section>
    </div>
</div>
