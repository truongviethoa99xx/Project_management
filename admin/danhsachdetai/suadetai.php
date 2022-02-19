<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="icon_genius"></i>Lĩnh vực khoa học công nghệ</li>
</ol>
<div class="container">
  <b>Đề tài đã họp không thể xóa</b>
   <div class="panel panel-default">
    <div class="panel-heading">Danh sách lĩnh vực</div>
    <div class="panel-body">
     <div class="table-responsive">
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Mã đề tài</th>
         <th>Tên đề tài </th>
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
   url:"danhsachdetai/fetch.php",
   type:"POST"
  },
  onSuccess:function(d, ts, xhr) {
  console.log(d);
  }
 });
 $('#editable_table').on('draw.dt', function(){
  $('#editable_table').Tabledit({
   url:'danhsachdetai/action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'MaDeTaiDuAn'],
    editable:[[1, 'TenDeTaiDuAn']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    console.log(data);
    if(data.action == 'delete')
    {
     $('#' + data.MaDeTaiDuAn).remove();
     $('#editable_table').DataTable().ajax.reload();
    }
   }
  });
 });
  
}); 
</script>