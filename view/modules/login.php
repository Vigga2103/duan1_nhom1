 <?php
    ob_start();
    // if (isset($_SESSION["loginCustomer"])) {
    //     header("location: index.php");
    // }
        include("connection.php");
    ?>
 <!--================Login Box Area =================-->
 <section class="login_box_area section-margin">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="login_box_img">
                     <div class="hover">
                         <h4>New to our website?</h4>
                         <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                         <a class="button button-account" href="index.php?page=register">Create an Account</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="login_form_inner">
                     <h3>Log in to enter</h3>
                     <form class="row login_form" method="post" id="contactForm">
                     <?php if (isset($_POST["loginCustomer"])) {
                            $ctm_name = trim($_POST["ctm_name"]); //Cắt khoảng trắng đằng trc chuỗi và sau chuỗi
                            $password = md5(trim($_POST["password"]));
                            $sqlLoginCtm = "SELECT * FROM customer WHERE ctm_name = '$ctm_name' and `password`= '$password'";
                            $resultCtm = mysqli_query($conn, $sqlLoginCtm);
                            if (mysqli_num_rows($resultCtm)) {
                                //Nếu mà ra đc kết quả tạo session
                                $rowloginCtm = mysqli_fetch_row($resultCtm);
                                $_SESSION["loginCustomer"] = $rowloginCtm;
                                header("location:index.php");
                            } else {
                                //Lỗi trả về login
                                header("location:login.php");
                            }
                        }
                        ?>
                         <div class="col-md-12 form-group">
                             <input type="text" class="form-control" id="ctm_name" name="ctm_name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên tài khoản'">
                         </div>
                         <div class="col-md-12 form-group">
                             <input type="password"  class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
                         </div>
                         <div class="col-md-12 form-group">
                             <div class="creat_account">
                                 <input type="checkbox" id="f-option2" name="selector">
                                 <label for="f-option2">Lưu mật khẩu</label>
                             </div>
                         </div>
                         <div class="col-md-12 form-group">
                             <button type="submit" name="loginCustomer" class="button button-login w-100">Đăng nhập</button>
                             <a href="#">Quên mật khẩu?</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Login Box Area =================-->