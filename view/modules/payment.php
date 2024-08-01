<section class="checkout_area section-margin--small">
    <div class="container">
   
        <div class="cupon_area">
            <div class="check_title">
                <h2>Có phiếu giảm giá? <a href="#">Nhập mã của bạn.</a></h2>
            </div>
            <input type="text" placeholder="Enter coupon code">
            <a class="button button-coupon" href="#">Áp dụng mã giảm giá</a>
        </div>
        <div class="cupon_area">
            
        </div>
        <div class="billing_details">
            <div class="row">
            <form class="row contact_form" action="#" method="post">
                <div class="col-lg-6">
                    <h3>Chi tiết thanh toán</h3>
                    <?php 
                        if(isset($_POST["addNew"])){
                        // $data = $_POST;
                        $dateTime = date("Y-m-d H:i:s");
                        // $data["ctm_id"] = isset($_SESSION["login"])?$_SESSION["login"]:0;
                        // $data["status"] = 1;
                        // $data["date_create"] = $dateTime;
                        // $data["payment"] = $_POST["payment"][0]; //Khi chuyển sang dâta này nó chỉ đơn thuần là mảng một chiều còn k gán ngc lại nó là mảng hai chiều.
                        // echo "<pre>";
                        // print_r($data);
                        $ctm_id = isset($_SESSION["loginCustomer"]["ctm_id"])?$_SESSION["loginCustomer"]["ctm_id"]:0;
                        $firt_name = $_POST["firt_name"];
                        $last_name = $_POST["last_name"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                        $address = $_POST["address"];
                        $description = $_POST["description"];
                        $status = 0;
                        $subtotal = 0;
                        $odertotal = 0;
                        $ship = 0;
                        if(isset($_SESSION["cart"])){
                            foreach($_SESSION["cart"] as $key=>$value){
                                $subtotal += $value["price"]*$value["quantity"];
                                $odertotal = $ship + $subtotal;
                            }
                        }
                        // var_dump($odertotal);
                        // die;
                        $date_create = $dateTime;   
                        $payment_id = $_POST["payment"][0];

                        $sqlInsertOder = "INSERT INTO oder (ctm_id,firt_name,last_name,phone,email,`address`,`description`,date_create,payment_id,`status`,odertotal)";
                        $sqlInsertOder .= "VALUES('$ctm_id','$firt_name','$last_name','$phone','$email','$address','$description','$date_create','$payment_id','$status','$odertotal')";
                        // echo $sqlInsertOder;
                        mysqli_query($conn, $sqlInsertOder) or die("Lỗi câu lệnh thêm mới");
                        $last_id = mysqli_insert_id($conn);//Lấy ra id vừa insert.
                        if(isset($_SESSION["cart"])){
                            foreach($_SESSION["cart"]as $key=>$value){//Khi mà thêm một bản ghi thì bên kia sẽ đc n cảu cả bản ghi
                                $price = $value["price"];
                                $quantity = $value["quantity"];
                                $sqlInsertOderDetail = "INSERT INTO oder_detail (oder_id,pro_id,price,quantity,`status`,date_create)";
                                $sqlInsertOderDetail .= "VALUES('$last_id','$key','$price','$quantity','$status','$dateTime')";
                                mysqli_query($conn, $sqlInsertOderDetail) or die("Lỗi câu lệnh thêm mới");
                            }
                            unset($_SESSION["cart"]);
                        }
                        //Sau khi lưu vào rồi thì sẽ xóa sesstion
                        }
                    ?>   
                    <?php 
                        if(isset($_SESSION["loginCustomer"]["ctm_id"])){
                            ?>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="firt_name" name="firt_name" placeholder="First Name"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["first_name"]; ?>"
                                    <?php } ?>
                                >
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["last_name"]; ?>"
                                    <?php } ?>
                                >
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["phone"]; ?>"
                                    <?php } ?>
                                >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["email"]; ?>"
                                    <?php } ?>
                                >
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["address"]; ?>"
                                    <?php } ?>
                                >
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                                    <?php if(isset($_SESSION["loginCustomer"]["ctm_id"])) { ?>
                                        value="<?php echo $_SESSION["loginCustomer"]["description"]; ?>"
                                    <?php } ?>
                                >
                                <span class="placeholder"></span>
                            </div>
                    <?php
                        } else{
                    
                    ?>
                    <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="firt_name" name="firt_name" placeholder="Firt Name">
                            <span class="placeholder" data-placeholder="First name"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>                    
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                            <span class="placeholder"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="description" name="description" placeholder="Mô tả">
                            <span class="placeholder"></span>
                        </div>

                    <?php 
                        }
                    ?>
                    
                       
                </div>
                
                <div class="col-lg-6">
                        <div class="order_box" style="width:500px;">
                                    <h2>Your Order</h2>
                                    <ul class="list">
                                        <li><a href="#"><h4>Tên <span class="middle" style="width:150px;">Số lượng</span> <span class="last">Giá</span></h4></a></li>
                                    <?php       
                                        $subtotal = 0;
                                        $odertotal = 0;
                                        $ship = 0;
                                        if(isset($_SESSION["cart"])){
                                            foreach($_SESSION["cart"] as $key=>$value){
                                                $subtotal += $value["price"]*$value["quantity"];
                                                $odertotal = $ship + $subtotal;
                                    ?>
                                        <li><a href="#"><b><?php echo  $value['name'] ?></b> <span class="middle">x<?php echo  $value["quantity"];?></span> 
                                        <span class="last"><?php echo number_format($value["price"]*$value["quantity"], 0, '', ',');?></span></a></li>
                                        <br>
                                
                                    <?php
                                             }
                                         }
                                    ?>     
                            </ul>
                                    <ul class="list list_2">
                                        <li><a href="#">Tổng tiền hàng <span><?php echo number_format($subtotal, 0, '', ','); ?></span></a></li>
                                        <li><a href="#">Vận chuyển <span>Miễn phí ship: 0</span></a></li>
                                        <li><a href="#">Tổng <span ><?php echo number_format($odertotal, 0, '', ','); ?></span></a></li>
                                    </ul>
                                    <br>
                                    
                                    <!-- <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">Tôi đã đọc kỹ và chấp nhận điều khoản.</label>
                                        <a href="#">terms &amp; conditions*</a>
                                    </div> -->
                       
                        </div>
                        <h3>Chọn phương thức thanh toán</h2>
                        <?php 
                            $sqlPayment = "SELECT * FROM payment WHERE status = 1";
                            $resultPayment = mysqli_query($conn, $sqlPayment) or die("Lỗi kết nối dữ liệu");
                            if (mysqli_num_rows($resultPayment) > 0) {
                                while ($rowPayment = mysqli_fetch_assoc($resultPayment)) {
                        ?>
                        <div class="col-md-12 form-group p_star">
                            <div class="radio">
                                <label><input type="radio" name="payment[]" id="payment[]" value="<?php echo $rowPayment["payment_id"]?>" style="margin-left: 20px;">
                                <?php echo $rowPayment["payment_name"]?></label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <?php 
                        
                    }
                }
                        ?>
                        <div class="text-center">
                          <button class="button button-paypal" type="submit" onclick="return confirm('Đơn hàng của bạn đang được xác nhận vui lòng đợi xác nhận');" name="addNew">Tiếp tục</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
  </section>