<?php
    include '../../config/xuly.php';
    $id = $_GET['id'];
    function getDanhMuc($conn, $id='')
    {
    	$madetai = $GET['madetai'];
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
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.html?id=<?php echo $id; ?>">Quản lý đề tài</a></li>
    <li><i class="icon_document_alt"></i>Thành lập hội đồng xét giao trực tiếp hoặc tuyển chọn</li>
</ol>
<!-- -------------------------------------------------------------------------------------- -->
<?php
    include '../../config/xuly.php';
?>
<?php
            //     $id = $_GET['madetai'];
            //     $query = "SELECT * FROM thanhlaphoidong WHERE MaDeTaiDuAn = '$id'";
            //     $result = mysqli_query($conn, $query);
            //     if(mysqli_num_rows($result) > 0){
            //         $i = 0;
            //     while ($r = mysqli_fetch_assoc($result)){
            //         $i++;
            //         $madetai = $r['MaDeTaiDuAn'];
            //         $idLinhVuc = $r['LinhVuc'];
            //         $idHocHam = $r['HocHamHocVi'];
            //         $HocHam = getDanhMuc($conn, $idHocHam);
            //         $LinhVuc = getDanhMuc($conn, $idLinhVuc);
            //         $tendetai = $r['TenDeTaiDuAn'];
            //         $ngaykhoitao = $r['NgayKhoiTaoDeTai'];
            //         $tgthuchientu  = $r['ThoiGianThucHienTu'];
            //         $den  = $r['ThoiGianThucHienDen'];
            //         $tongkinhphi = $r['TongKinhPhi'];
            //         $tungansach  = $r['TuNganSach'];
            //         $nguonvonkhac  = $r['NguonVonKhac'];
            //         $thuocchuongtrinh  = $r['ThuocChuongTrinh'];
            //         $chunhiem  = $r['ChuNhiemDeTai'];
            //         $dienthoaicoquan  = $r['DienThoaiCoQuan'];
            //         $dienthoairieng  = $r['DienThoaiNhaRieng'];
            //         $dtdd  = $r['DienThoaiDiDong'];
            //         $email  = $r['Email'];
            //         $tendonvi  = $r['TenDonViChuTri'];
            //         $diachidonvi  = $r['DiaChiDonVi'];
            //         $dienthoaidonvi  = $r['DienThoaiDonVi'];
            //         $fax  = $r['FaxDonvi'];
            //         echo "<tr>";
            //   }
            // }
?>
<!-- -------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
             	Đề tài : <?php echo $tendetai; ?>
             </header>
             <div class="panel-body">
                <form class="form-horizontal " method="POST" action="xulylaphoidong.php?madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Số quyết định thành lập hội đồng</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="txtSo"> 
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Ngày ra quyết định </label>
                    	<div class="col-sm-10">
                      		<input type="datetime-local" class="form-control" name="txtNgay">
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Căn cứ quyết định số</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="txtCancu">
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Ngày ra quyết định</label>
                    	<div class="col-sm-10">
                      		<input type="datetime-local" class="form-control" name="txtNgayquyetdinh">
                    	</div>
                	</div>
                    <div class="form-group">
                    	<label class="col-sm-2 control-label"><b>Danh sách hội đồng</b></label>
                    	<div class="col-sm-10">
                    	</div>
                  	</div>
                  	<div class="form-group">
                  		<label class="col-sm-2 control-label">Chọn lĩnh vực</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slLinhvuc">
				        		<?php
                                    $query = "SELECT * FROM danhmuc WHERE Loai = 1";
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
                  		<label class="col-sm-2 control-label">Chủ tịch hội đồng</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slChutich">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idchucvu = $r['ChucVu'];
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                        	$ChucVu = getDanhMuc($conn, $idchucvu);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Phó chủ tịch hội đồng</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slPhochutich">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Phản biện 1</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slPhanbien1">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Phản biện 2</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slPhanbien2">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Phản biện 3</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slPhanbien3">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
		    		<div class="form-group">
		                <label class="col-sm-2 control-label">Ủy viên 1</label>
						<div class="form-group col-md-3" style="margin-left:0px;">
						    <select id="inputState" class="form-control" name="slUyvien1">
						    	<option selected="selected" value="">--Chọn--</option>
						        <?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
						   	</select>
		    			</div>
						<div class="col-sm-7" style="margin-left: 14px;">
						    <input type="text" class="form-control" id="inputCity">
						</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 2</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien2">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 3</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien3">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 4</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien4">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 5</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien5">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 6</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien6">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Ủy viên 7</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slUyvien7">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                  		<label class="col-sm-2 control-label">Thư ký hội đồng</label>
				    	<div class="form-group col-md-3" style="margin-left:0px;">
				      		<select id="inputState" class="form-control" name="slThuky">
				      			<option selected="selected" value="">--Chọn--</option>
				        		<?php
				        			$query = "SELECT * FROM hoidongkhoahoc";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($r = mysqli_fetch_assoc($result)) {
                                        	$idHocHam = $r['HocHamHocVi'];
                                        	$HocHam = getDanhMuc($conn, $idHocHam);
                                            echo "<option value='$r[ID]'> $HocHam: $r[HoTen]</option>";
                                        }
                                    }
                                ?>
				        	</select>
    					</div>
				    	<div class="col-sm-7" style="margin-left: 14px;">
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
    				</div>
    				<div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                        </div>
                    </div>
