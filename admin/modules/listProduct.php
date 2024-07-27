<div class="x_content">

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action text-center">
            <button class="btn btn-btn-primary"> <a href="index.php?page=addProduct">
                    <i class="fa fa-plus" style="color:#0066FF"> Thêm </i></a></button>
            <thead>
                <tr class="headings">
                    <th class="column-title">Id</th>
                    <th class="column-title">Tên </th>
                    <th class="column-title">Danh mục</th>
                    <!-- <th class="column-title">Kích cỡ</th>
                    <th class="column-title">Thương hiệu </th>
                    <th class="column-title">Màu</th> -->
                    <th class="column-title">Ảnh</th>
                    <th class="column-title">Giá</th>
                    <!-- <th class="column-title">Mô tả</th> -->
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Ngày tạo</th>
                    <th class="column-title no-link last"><span class="nobr">Thao tác</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sqlSelectProduct = "SELECT * FROM product";
                //Thực thi truy vấn
                //Cau lenh delete
                if (isset($_GET["id"]) && isset($_GET["del"])) {
                    $sqlDeleteProduct = "DELETE FROM product WHERE pro_id=" . $_GET["id"];
                    mysqli_query($conn, $sqlDeleteProduct) or die("Lỗi xóa bản ghi");
                    header("localhost:index.php?page=listProduct");
                }
                //Danh sach Product
                $result = mysqli_query($conn, $sqlSelectProduct) or die("Lỗi truy vấn dữ liệu");
                if (mysqli_num_rows($result) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
                    $i = 0; // biến đếm 
                    while ($row = mysqli_fetch_assoc($result)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
                        $i++;

                        $sqlCategory = "SELECT * FROM category WHERE cat_id=" . $row["cat_id"];
                        $resultCategory = mysqli_query($conn, $sqlCategory);
                        $rowCategory = mysqli_fetch_row($resultCategory);

                        $sqlSize = "SELECT * FROM size WHERE size_id=" . $row["size_id"];
                        $resultSize = mysqli_query($conn, $sqlSize);
                        $rowSize = mysqli_fetch_row($resultSize);

                        $sqlFactory = "SELECT * FROM factory WHERE fac_id=" . $row["fac_id"];
                        $resultFactory = mysqli_query($conn, $sqlFactory);
                        $rowFactory = mysqli_fetch_row($resultFactory);

                        $sqlColor = "SELECT * FROM color WHERE col_id=" . $row["col_id"];
                        $resultColor = mysqli_query($conn, $sqlColor);
                        $rowColor = mysqli_fetch_row($resultColor);

                ?>
                        <tr class="even pointer">
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row["pro_name"]; ?></td>
                            <td><?php echo $rowCategory[1]; ?></td>
                            <!-- <td><?php echo $rowSize[1]; ?></td>
                            <td><?php echo $rowFactory[1]; ?></td>
                            <td><?php echo $rowColor[1]; ?></td> -->
                            <td><img style="width:40px; height:40px" src="../<?php echo $row["images"]; ?>" alt=""></td>
                            <td><?php echo $row["price"]; ?></td>
                            <!-- <td><?php echo $row["description"]; ?></td> -->
                            <td>
                                <label>
                                    <?php echo ($row["status"] ? "Hiển thị" : "Ẩn") ?>
                                </label>
                            </td>
                            <td><?php echo date("d-m-Y H:i:s", strtotime($row["date_create"])) ?></td>
                            <td>
                                <a href="index.php?page=updateProduct&id=<?php echo $row["pro_id"] ?>&edit=1">
                                    <i class="fa fa-pencil" style="color:#FF8C00"> Sửa </i></a>
                                <!-- <a href="index.php?page=listProduct&id=<?php echo $row["pro_id"] ?>&del=1" onclick=" return confirm('Bạn có muốn xóa không?');">
                                    <i class="fa fa-trash" style="color:red"> Xóa </i></a> -->
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