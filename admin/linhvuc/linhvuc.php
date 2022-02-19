<?php
    include '../config/xuly.php';

    $id = $_GET['id'];
?>
<h3 class="page-header"> <i class="fa fa-th-list"> Lĩnh Vực Khoa Học Công Nghệ</i><a style="margin-top: -10px; margin-left: 20px;" href="index.php?mod=themdetai&id=<?php echo $id; ?>"></a></h3>
<br />
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="icon_genius"></i>Lĩnh vực khoa học công nghệ</li>
</ol>
<!-- --------------------------------------------------------------------------- -->
  <div class="container">
   <div class="panel panel-default">
    <div class="panel-heading">Danh sách lĩnh vực</div>
    <div class="panel-body">
     <div class="table-responsive">
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>ID</th>
         <th>Tên danh mục</th>
        </tr>
       </thead>
       <tbody></tbody>
      </table>
     </div>
    </div>
   </div>
  </div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 var dataTable = $('#editable_table').DataTable({
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
   url:"linhvuc/fetch.php",
   type:"POST"
  },
  onSuccess:function(d, ts, xhr) {
  console.log(d);
  }
 });
 $('#editable_table').on('draw.dt', function(){
  $('#editable_table').Tabledit({
   url:'linhvuc/action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'ID'],
    editable:[[1, 'TenDanhMuc']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    console.log(data);
    if(data.action == 'delete')
    {
     $('#' + data.ID).remove();
     $('#editable_table').DataTable().ajax.reload();
    }
   }
  });
 });
  
}); 
</script>
    <!-- ---------------------------------------------------------------------------- -->
    <div class="col-sm-6">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form action="linhvuc/xulythemlinhvuc.php?id=<?php echo $id; ?>" method="POST" class="form-validate form-horizontal" id="feedback_form">
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Nhập tên danh mục <span class="required"></span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="txtLinhvuc" minlength="5" type="text" required />
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
        </section>
    </div>
</div>
</div>
