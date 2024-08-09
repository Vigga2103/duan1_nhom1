<section class="section-margin--small mb-5">
    <div class="container">
        <h3 class="text-center">Thông tin tài khoản</h3>
        <div class="row my-5 d-flex justify-content-center">
            <?php
            if(isset(( $_GET['id']))){
              $id =  $_GET['id'];
              $sql = "SELECT * FROM customer WHERE ctm_id ='$id'";
              $dbResult = mysqli_query($conn, $sql) or die("Lỗi truy vấn dữ liệu");
              $resultPro = mysqli_fetch_array($dbResult);

              $name = $resultPro['ctm_name'];
              $firstName = $resultPro['firt_name'];
              $lastName = $resultPro['last_name'];
              $email = $resultPro['email'];
              $phone_number = $resultPro['phone_number'];
              $address = $resultPro['address'];
              $gender = $resultPro['gender'];
            }
          ?>
            <div class="col-3">
                <label> Tên hiển thị</label>
                <input type="text" class="form-control mb-2" value="<?= $name?>" disabled>
                <label> Tên chủ sở hữu</label>
                <input type="text" class="form-control mb-2" value="<?= $firstName.' '.$lastName?>" disabled>
                <label> Email</label>
                <input type="text" class="form-control mb-2" value="<?= $email?>" disabled>
            </div>
            <div class="col-3">
                <div class="row">
                    <label> Số điện thoại</label>
                    <input type="text" class="form-control mb-2" value="<?= $phone_number?>" disabled>
                    <label> Địa chỉ</label>
                    <input type="text" class="form-control mb-2" value="<?= $address?>" disabled>
                    <label> Giới tính</label>
                    <input type="text" class="form-control mb-2" value="<?= $gender?>" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox"
                                        id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins
                                        class="iCheck-helper"
                                        style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                            </th>
                            <th class="column-title">STT</th>
                            <th class="column-title">Ngày tạo đơn hàng</th>
                            <th class="column-title">Mã đơn hàng</th>
                            <th class="column-title">Tên người mua hàng</th>
                            <th class="column-title">Email đặt hàng </th>
                            <th class="column-title">Số điện thoại </th>
                            <th class="column-title">Trạng thái </th>
                            <th class="column-title">Tổng tiền hàng </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                                $id =  $_GET['id'];
                                $sqlSelectOder = "SELECT * FROM oder WHERE ctm_id = $id";
                                $resultSelectOder = mysqli_query($conn, $sqlSelectOder) or die("Lỗi truy vấn dữ liệu");

                                if (mysqli_num_rows($resultSelectOder) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
                                    $i = 0; // biến đếm 
                                    
                                    while ($rowSelectOder = mysqli_fetch_assoc($resultSelectOder)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
                                        $i++;
                            ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox"
                                        class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins
                                        class="iCheck-helper"
                                        style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                            </td>
                            <td class=" "><?php echo $i; ?></td>
                            <td class=" "><?php echo $rowSelectOder["date_create"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["oder_id"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["firt_name"]." ".$rowSelectOder["last_name"]; ?>
                            </td>
                            <td class=" "><?php echo $rowSelectOder["email"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["phone"]; ?></td>
                            <td>
                                <label>
                                    <?php 
                                        switch ($rowSelectOder["status"]) {
                                            case  1:
                                                 echo "Đã xác nhận đơn hàng"; 
                                              break;
                                            case 2:
                                                 echo "Đơn hàng đang vận chuyển";
                                              break;
                                            case 3:
                                                echo "Đơn hàng bị hủy";
                                                break;
                                            case 4:
                                                echo "Đơn hàng đã giao thành công";
                                                break;
                                            default:
                                              echo "Đơn hàng đang xử lí";
                                          }
                                    ?>
                                </label>
                            </td>
                            <td class="a-right a-right ">
                                <?php echo number_format($rowSelectOder["odertotal"], 0, '', ','); ?></td>

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
</section>