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
            $status = false;
            if (isset($_GET["id"]) && isset($_GET["edit"])) {
                $sqlSelectProduct = "SELECT * FROM product WHERE pro_id=" . $_GET["id"];
                $resultSelectProduct = mysqli_query($conn, $sqlSelectProduct);
                $row = mysqli_fetch_row($resultSelectProduct);
                $pro_name = $row[1];
                $cat_id = $row[2];
                $size_id = $row[3];
                $fac_id = $row[4];
                $images = $row[5];
                $price = $row[6];
                $description = $row[7];
                $col_id = $row[10];
                $status = ($row[8] ? true : false);
                $date_create = $row[9] = date("Y-m-d H:i:s");
            }
            if (isset($_POST["update"])) {
                $_POST["date_create"] = date("Y-m-d H:i:s");
                $path = "uploads";
                $fileName = "";
                if (isset($_FILES["images"])) {
                    // echo "<pre>";
                    // print_r($_FILES);
                    // die;
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
                        echo "Bạn chưa chọn file";
                    }

                    $_POST["images"] = $fileName;
                }


                $pro_name = $_POST["pro_name"];
                $rowcategory[1] = $_POST["cat_id"];
                $rowSize[1] = $_POST["size_id"];
                $rowColor[1] = $_POST["col_id"];
                $rowFactory[1] = $_POST["fac_id"];
                $images = $_POST["images"];
                $price = $_POST["price"];
                $description = $_POST["description"];
                $status = isset($_POST["status"]) ? 1 : 0;
                $date_create = $_POST["date_create"];
                if (isset($_GET["id"]) && isset($_GET["edit"])) {
                    if (empty($images)) {
                        $sqlUpdate = "UPDATE product SET `pro_name`='$pro_name',`cat_id`='$rowcategory[1]',`size_id`='$rowSize[1]'
                    ,`fac_id`='$rowFactory[1]',`price`='$price',`description`='$description',`status`='$status',
                    `date_create`='$date_create',`col_id`='$rowColor[1]' WHERE pro_id=" . $_GET["id"];
                    } else {
                        $sqlUpdate = "UPDATE product SET `pro_name`='$pro_name',`cat_id`='$rowcategory[1]',`size_id`='$rowSize[1]'
                    ,`fac_id`='$rowFactory[1]',`images` ='$images' ,`price`='$price',`description`='$description',`status`='$status',
                    `date_create`='$date_create',`col_id`='$rowColor[1]' WHERE pro_id=" . $_GET["id"];
                    }
                    mysqli_query($conn, $sqlUpdate) or ("Lỗi câu lệnh cập nhật ");
                    header("location:index.php?page=listProduct");
                }
            }

            ?>
            <br>
            <form class="form-label-left input_mask" method="post" enctype="multipart/form-data">

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php echo $pro_name; ?>" placeholder="Tên sản phẩm">
                </div>
                <?php
                $sql = "SELECT * FROM category WHERE status = 1";
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn lấy dữ liệu");

                $sqlCategory = "SELECT * FROM category WHERE cat_id=" . $cat_id; //Lấy dữ liệu qua id
                $resultCategory = mysqli_query($conn, $sql); //Hàm trả về giá trị
                $rowCategory = mysqli_fetch_row($result);
                ?>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="cat_id" name="cat_id">
                        <option value="<?php echo $cat_id; ?>"><?php echo $rowCategory[1]; ?></option>
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
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn lấy dữ liệu");

                $sqlSize = "SELECT * FROM size WHERE size_id=" . $size_id;
                $resultSize = mysqli_query($conn, $sqlSize);
                $rowSize = mysqli_fetch_row($resultSize);
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="size_id" name="size_id">
                        <option value="<?php echo $size_id ?>"><?php echo $rowSize[1]; ?></option>
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

                $sqlColor = "SELECT * FROM color WHERE col_id=" . $col_id;
                $resultColor = mysqli_query($conn, $sqlColor);
                $rowColor = mysqli_fetch_row($resultColor);
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="col_id" name="col_id">
                        <option value="<?php echo $col_id; ?>"><?php echo $rowColor[1]; ?></option>
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

                $sqlFactory = "SELECT * FROM factory WHERE fac_id=" . $fac_id;
                $resultFactory = mysqli_query($conn, $sqlFactory);
                $rowFactory = mysqli_fetch_row($resultFactory);
                ?>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" id="fac_id" name="fac_id">
                        <option value="<?php echo $fac_id; ?>"><?php echo $rowFactory[1]; ?></option>
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
                    <img style="width:50px; height:50px" src="../<?php echo $images; ?>" alt="">
                </div>
                <div class="col-md-12 col-sm-12  form-group has-feedback">
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>" placeholder="Giá">

                </div>

                <div class="col-md-12 col-sm-12 x_content">
                    <textarea class="resizable_textarea form-control" name="description"><?php echo $description; ?></textarea>

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" value="1" <?php echo ($status) ? "checked" : "" ?> id="status" name="status">
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color:white">Ẩn/hiện</span>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group row justify-content-center">
                    <div class="col-md-9 col-sm-9 text-center">
                        <a href="index.php?page=listProduct"><button type="button" class="btn btn-primary">Cancel</button></a>
                        <button type="submit" class="btn btn-success" name="update">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>