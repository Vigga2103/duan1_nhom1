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
                    if(isset($_POST["id"])){
                        
                        $sqlOderDetail = "SELECT * FROM oder_detail WHERE oder_detail_id=" . $oder_detail; //Lấy dữ liệu qua id
                        $resultOderDetail = mysqli_query($conn, $sqlOderDetail); //Hàm trả về giá trị
                        $rowOderDetail = mysqli_fetch_row($resultOderDetail);

                        // $sqlOderDetailProduct = "SELECT * FROM oder_detail INNER JOIN product ON oder_detail.pro_id=product.pro_id WHERE oder_detail.pro_id = $oder_detail";
                        // $resultOderDetailProduct = mysqli_query($conn, $sqlOderDetailProduct);
                        // $rowOderDetailProduct = mysqli_fetch_row($resultOderDetailProduct);
                        
                        $sqlOder = "SELECT * FROM oder_detail INNER JOIN oder ON oder_detail_id=oder.oder_id WHERE oder_detail.oder_detail_id = $oder_detail_id";
                        $resultOder = mysqli_query($conn, $sqlOder);
                        $rowOder = mysqli_fetch_row($resultOder);

                    }
            ?>
        <form class="form-label-left input_mask" method="post" enctype="multipart/form-data">

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="firt_name" name="firt_name" placeholder="First Name" value="<?php echo $rowOderDetail[2]; ?>">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <img style="width:50px; height:50px" src="../<?php echo $images; ?>" alt="">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Số lượng">
                </div>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Giá">
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="ctm_name" name="ctm_name" placeholder="Tên người dùng">
                </div>
                
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="payment_name" name="payment_name" placeholder="Phương thức thanh toán">

                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="total" name="total" placeholder="Tỏng tiền hàng">

                </div>
                <div class="col-md-12 col-sm-12  form-group has-feedback">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">

                </div>
                <div class="col-md-12 col-sm-12 x_content">
                    <textarea class="resizable_textarea form-control" name="description" id="description" placeholder="Mô tả"></textarea>

                </div>
                <div class="ln_solid"></div>
                <div class="form-group row justify-content-center">
                    <div class="col-md-9 col-sm-9 text-center">
                        <a href="index.php?page=oder"><button type="button" class="btn btn-primary">Cancel</button></a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>