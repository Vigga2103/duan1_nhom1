<div class="x_content">

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action text-center">
            <thead>
                <tr class="headings">
                    <th class="column-title">Id</th>
                    <th class="column-title">Tên tài khoản </th>
                    <th class="column-title">Chủ sở hữu</th>
                    <th class="column-title">Số điện thoại</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Giới tính</th>
                    <th class="column-title">Địa chỉ</th>
                    <th class="column-title">Ngày tạo</th>
                    <th class="column-title no-link last"><span class="nobr">Thao tác</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM customer";
                //Thực thi truy vấn
                //Cau lenh delete
                if (isset($_GET["id"]) && isset($_GET["delete"])) {
                    $DeleteAccount = "DELETE FROM customer WHERE ctm_id=" . $_GET["id"];
                    mysqli_query($conn, $DeleteAccount) or die("Lỗi xóa bản ghi");
                    header("localhost:index.php?page=user");
                }
                //Danh sach Product
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn dữ liệu");
                if (mysqli_num_rows($result) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
                    $i = 0; // biến đếm 
                    while ($row = mysqli_fetch_assoc($result)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
                        $i++;
                        $listUser = mysqli_query($conn, $sql);
                        $resultGetList = mysqli_fetch_row($listUser);

                ?>
                        <tr class="even pointer">
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row["ctm_name"]; ?></td>
                            <td><?php echo $row['firt_name']. ' '. $row['last_name']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo date("d-m-Y H:i:s", strtotime($row["date_create"])) ?></td>
                            <td>
                                <a href="index.php?page=listUser&id=<?php echo $row["ctm_id"] ?>&delete=1" onclick=" return confirm('Bạn có muốn xóa không?');">
                                    <i class="fa fa-trash" style="color:red"> Xóa </i></a>
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
