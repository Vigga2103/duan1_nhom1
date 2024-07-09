<div class="row">
    <div class="x_panel">
        <div class="x_title">
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
            <?php
            if (isset($_POST["addNew"])) {
                // echo "pre";
                // print_r($_POST);
                $table = "product";
                $_POST["status"] = 1;
                $_POST["date_create"] = date("Y-m-d H:i:s");
                //xử lí uploads file.
                $path = "uploads";
                $fileName = "";
                if (isset($_FILES["images"])) {
                    // echo "<pre>";
                    // print_r($_FILES);
                    if (isset($_FILES["images"]["name"])) {
                        if ($_FILES["images"]["type"] == "image/jpeg" || $_FILES["images"]["type"] == "image/png" || $_FILES["images"]["type"] == "image/gif") {
                            if ($_FILES["images"]["size"] <= 24000000) {
                                if ($_FILES["images"]["error"] == 0) {
                                    //Di chuyển file vào thư mục uploads
                                    move_uploaded_file($_FILES["images"]["tmp_name"], "../" . $path . "/" . $_FILES["images"]["name"]); //Nối với file cần đưa ra mà k cần phải nối bên trên.
                                    //Hàm upload file
                                    $fileName = $path . "/" . $_FILES["images"]["name"];
                                } else {
                                    echo "Lỗi file";
                                }
                            } else {
                                echo "File quá lớn";
                            }
                        } else {
                            echo "File không phải là ảnh";
                        }
                    } else {
                        echo "Bạn chưa chconj file";
                    }
                }
                $_POST["images"] = $fileName;
                $data = $_POST;
                addNew($table, $data, $conn);
            }
            ?>
            <br>
            <form class="form-label-left input_mask" method="post" enctype="multipart/form-data">

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Tên sản phẩm">
                </div>
                <?php
                $sql = "SELECT * FROM category WHERE status = 1";
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn lấy dữ liệu");

                ?>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="cat_id" name="cat_id">
                        <option value="">-- Chọn danh mục sản phẩm --</option>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <option value="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <?php
                $sql = "SELECT * FROM size WHERE status = 1";
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn dữ liệu");
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="size_id" name="size_id">
                        <option value="">-- Chọn kích cỡ sản phẩm --</option>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <option value="<?php echo $row["size_id"] ?>"><?php echo $row["size_name"] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </div>
                <?php
                $sql = "SELECT * FROM color WHERE status = 1";
                $result = mysqli_query($conn, $sql) or die("Lỗi kết nối dữ liệu");
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="col_id" name="col_id">
                        <option value="">-- Chọn màu sản phẩm --</option>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                                <option value="<?php echo $row["col_id"] ?>"><?php echo $row["col_name"] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </div>
                <?php
                $sql = "SELECT * FROM factory WHERE status = 1";
                $result = mysqli_query($conn, $sql) or die("Kết nối dữ liệu không thành công");
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="fac_id" name="fac_id">
                        <option value="">-- Chọn thương hiệu sản phẩm --</option>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <option value="<?php echo $row["fac_id"] ?>"><?php echo $row["fac_name"] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="file" id="images" name="images">

                </div>

                <div class="col-md-12 col-sm-12  form-group has-feedback">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Giá">

                </div>

                <div class="col-md-12 col-sm-12 x_content">
                    <textarea class="resizable_textarea form-control" name="description" id="description"></textarea>

                </div>
                <div class="ln_solid"></div>
                <div class="form-group row justify-content-center">
                    <div class="col-md-9 col-sm-9 text-center">
                        <button type="button" class="btn btn-primary">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success" name="addNew">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>