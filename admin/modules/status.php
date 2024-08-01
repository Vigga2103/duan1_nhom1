<div class="col-md-12 col-sm-12  form-group has-feedback">
            <?php 

                if (isset($_POST["status"])) {  
                    $status =  $_POST["status"];
                    $sqlUpdate = "UPDATE oder SET `status`= ".$status." WHERE oder_id=" . $_GET["id"];
                    mysqli_query($conn, $sqlUpdate) or ("Lỗi câu lệnh cập nhật ");  
                    header("location:index.php?page=oder");  
                }
            ?>
        <form class="form-label-left input_mask" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                    
                    <select class="form-control" id="status" name="status">
                        <option value="<?php echo $_GET["status"]; ?>">
                        <?php 
                            switch ($_GET["status"]) {
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

                        </option>
                                <option value="1">Đã xác nhận đơn hàng</option>
                                <option value="2">Đơn hàng đang vận chuyển</option>
                                <option value="3">Đơn hàng bị hủy</option>
                                <option value="4">Đơn hàng đã giao thành công</option>
                    </select>
                    </div>
                    <div class="form-group row justify-content-center">
                    <div class="col-md-9 col-sm-9 text-center">
                        <a href="index.php?page=oder"><button type="button" class="btn btn-primary">Thoát</button></a>
                        <button type="submit" class="btn btn-success" name="edit">Lưu</button>
                    </div>
                </div>

        </form>
</div>