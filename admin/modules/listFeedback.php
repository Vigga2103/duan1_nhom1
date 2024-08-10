<div class="x_content">

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action text-center">
            <thead>
                <tr class="headings">
                    <th class="column-title">Id</th>
                    <th class="column-title">Tên người gửi </th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Tiêu đề</th>
                    <th class="column-title">Nội dung</th>
                    <th class="column-title no-link last"><span class="nobr">Thao tác</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM feedback";
                //Thực thi truy vấn
                //Cau lenh delete
                if (isset($_GET["id"]) && isset($_GET["delete"])) {
                    $DeleteFback = "DELETE FROM feedback WHERE fb_id=" . $_GET["id"];
                    mysqli_query($conn, $DeleteFback) or die("Lỗi xóa bản ghi");
                    header("localhost:index.php?page=user");
                }
                //Danh sach Product
                $result = mysqli_query($conn, $sql) or die("Lỗi truy vấn dữ liệu");
                if (mysqli_num_rows($result) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
                    $i = 0; // biến đếm 
                    while ($row = mysqli_fetch_assoc($result)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
                        $i++;
                        $listFeedback = mysqli_query($conn, $sql);
                        $resultGetList = mysqli_fetch_row($listFeedback);

                ?>
                        <tr class="even pointer">
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row["author"]; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['content']; ?></td>
                            <td>
                                <a href="index.php?page=listFeedback&id=<?php echo $row["fb_id"] ?>&delete=1" onclick=" return confirm('Bạn có muốn xóa không?');">
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