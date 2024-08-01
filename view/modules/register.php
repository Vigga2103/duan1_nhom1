<!--================Login Box Area =================-->
<section class="login_box_area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Bạn có sẵn một tài khoản?</h4>
                        <p>Khoa học và công nghệ đang có những tiến bộ mỗi ngày và ví dụ điển hình là</p>
                        <a class="button button-account" href="index.php?page=login">Đăng nhập ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner register_form_inner">
                <?php
            if (isset($_POST["addNew"])) {
                $_POST["status"] = 1;
                $_POST["date_create"] = date("Y-m-d H:i:s");
                // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                // echo "pre";
                // print_r($_POST);
                // die;
                // $table = "customer";
                $ctm_name = $_POST["ctm_name"];
                $password = md5(trim($_POST["password"]));
                $phone_number = $_POST["phone_number"];
                $email = $_POST["email"];
                $gender = $_POST["gender"];
                $address = $_POST["address"];
                $status = $_POST["status"];
                $dateTime = $_POST["date_create"];
                $firt_name = $_POST["firt_name"];
                $last_name = $_POST["last_name"];
                // $data = $_POST;
                $sqlregister = "INSERT INTO customer (ctm_name, `password`, phone_number, email, gender, `address`, `status`, date_create, firt_name, last_name)";
                $sqlregister .= "VALUES ('$ctm_name', '$password', '$phone_number', '$email', '$gender', '$address', '$status', '$dateTime', '$firt_name', '$last_name')";
                // die($sql);
                mysqli_query($conn, $sqlregister) or die("Lỗi câu lệnh thêm mới");
                header("location:index.php?page=login");
            }
            ?>
                    <h3>Đăng ký</h3>
                    <form class="row login_form" action="#/" id="register_form" method="post">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="ctm_name" name="ctm_name" placeholder="Tên tài khoản">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="gender" name="gender" placeholder="Giới tính">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Số điện thoại">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="firt_name" name="firt_name" placeholder="Họ">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Tên">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Xác nhận mật khẩu">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Lưu tài khoản</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-register w-100" name="addNew">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->