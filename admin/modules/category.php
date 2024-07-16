<div class="col-md-6">
	<div class="x_panel">
		<div class="x_title">
			<h2>Thêm mới danh mục</h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Settings 1</a>
						<a class="dropdown-item" href="#">Settings 2</a>
					</div>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
			<?php
			if (isset($_POST["addNew"])) {
				$catName = $_POST["cat_name"];
				$status = isset($_POST["status"]) ? 1 : 0; // Nếu tồn tại hay nói khác là người fugd kích vào hiện là 1 bỏ là 0
				$date_create = date("Y-m-d H:i:s"); //Hàm date năm tháng ngày giờ phút giây lấy thồn tin
				if (isset($_GET["id"]) && isset($_GET["edit"])) {
					//Sửa theo id
					$sql = "UPDATE category SET cat_name='$catName', `status`='$status',date_update='$date_create' WHERE cat_id =" . $_GET["id"];
					mysqli_query($conn, $sql) or ("Lỗi câu lệnh cập nhật ");
					header("localhost:index.php?page=category");
				} else {
					// $sql = "INSERT INTO category (`cat_name`, `status`, `date_create`)";
					// $sql .= "VALUES ('$catName','$status','$date_create')";
					// //Thực thi câu lệnh truy vấn.
					// mysqli_query($conn, $sql) or ("Lỗi câu lệnh thêm mới");
					$table = "category";
					$_POST["status"] = $status;
					$_POST["date_create"] = $date_create;
					$data = $_POST;
					addNew($table, $data, $conn);
				}
			}
			//Kiểm tra tham số id trên url
			//Trường hợp edit
			$cat_name = ""; //Rỗng
			$status = false; //False
			if (isset($_GET["id"]) && isset($_GET["edit"])) { //Lấy id
				$sql = "SELECT * FROM category WHERE cat_id=" . $_GET["id"]; //Lấy dữ liệu qua id
				$result = mysqli_query($conn, $sql); //Hàm trả về giá trị
				$row = mysqli_fetch_row($result);
				// echo "<pre>";
				// print_r($row);
				$cat_name = $row[1]; //Gán dữ liệu
				$status = ($row[2] ? true : false); //Kiểm tra dữ liệu
				//Khi mà chương trình chạy đến cat_name bằng rỗng cái status = false và lấy đc id
				//Kiểm tra dữ liệu tiếp và lấy được id và gán dữ liệu kiểm tra điều kiện 0 thì là false 1 thì là true
			}
			//Trường hợp xóa
			if (isset($_GET["id"]) && isset($_GET["del"])) {
				$sql = "DELETE FROM category WHERE cat_id=" . $_GET["id"];
				mysqli_query($conn, $sql) or die("Lỗi xóa bản ghi");
				header("localhost:index.php?page=category");
			}
			?>
			<form class="form-label-left input_mask" method="post">

				<div class="form-group row">
					<label class="col-form-label col-md-3 col-sm-3 ">Tên danh mục</label>
					<div class="col-md-9 col-sm-9 ">
						<input type="text" class="form-control" value="<?php echo $cat_name; ?>" name="cat_name" id="cat_name" placeholder="Tên danh mục">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3  control-label">Trạng thái</label>

					<div class="col-md-9 col-sm-9 ">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="1" <?php echo ($status) ? "checked" : "" ?> name="status" id="status"> Ẩn/Hiện
							</label>
						</div>
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group row">
					<div class="col-md-9 col-sm-9  offset-md-3">
						<!-- <button type="button" class="btn btn-danger">Cancel</button>
						<button class="btn btn-warning" type="reset">Reset</button> -->
						<button type="submit" class="btn btn-primary" name="addNew">Submit</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="x_panel">
		<div class="x_title">
			<h2>Thao tác</h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Settings 1</a>
						<a class="dropdown-item" href="#">Settings 2</a>
					</div>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Tên danh mục</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<?php
				//Lấy dữ liệu
				$sql = "SELECT * FROM category";
				//Thực thi truy vấn
				$result = mysqli_query($conn, $sql) or die("Lỗi truy vấn dữ liệu");
				if (mysqli_num_rows($result) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
					$i = 0; // biến đếm 
					while ($row = mysqli_fetch_assoc($result)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
						$i++;
				?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $i; ?></th>
								<td><?php echo $row["cat_name"] ?></td>
								<td><?php echo ($row["status"] ? "Hiển thị" : "Ẩn") ?></td>
								<td><?php echo date("d-m-Y H:i:s", strtotime($row["date_create"])) ?></td>
								<td>
									<a href="index.php?page=category&id=<?php echo $row["cat_id"] ?>&edit=1">
										<i class="fa fa-pencil" style="color:#0066FF"> Sửa </i></a>
									<a href="index.php?page=category&id=<?php echo $row["cat_id"] ?>&del=1" onclick="return confirm('Bạn có muốn xóa không?');"><i class="fa fa-trash" style="color:red"> Xóa </i></a>
								</td>
							</tr>
					<?php
					}
				}
					?>
						</tbody>
			</table>

		</div>
	</div>
</div>