<?php

ob_start();
session_start();
if (isset($_SESSION["loginadmin"])) {
    header("location: index.php");
}
date_default_timezone_set('Asia/Ho_Chi_Minh') .
    include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post">
                        <?php
                        if (isset($_POST["loginadmin"])) {
                            $admin_name = trim($_POST["admin_name"]); //Cắt khoảng trắng đằng trc chuỗi và sau chuỗi
                            $password = md5(trim($_POST["password"]));
                            $sqlLogin = "SELECT * FROM admin WHERE admin_name = '$admin_name' and `password`= '$password'";
                            $result = mysqli_query($conn, $sqlLogin);
                            if (mysqli_num_rows($result)) {
                                //Nếu mà ra đc kết quả tạo session
                                $rowlogin = mysqli_fetch_row($result);
                                $_SESSION["loginadmin"] = $rowlogin;
                                header("location: index.php");
                            } else {
                                //Lỗi trả về login
                                header("location: login.php");
                            }
                        }
                        ?>
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Adminname" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-primary submit" type="submit" name="loginadmin">Login</button>
                            <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" id="password" name="password" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>