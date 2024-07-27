<?php 
ob_start();
session_start();
include("connection.php");
 if(isset($_POST["id"]) && isset($_POST["number"])){
    $pro_id= $_POST["id"];
    $num = $_POST["number"];
    $sqlDetailProCate = "SELECT * FROM product INNER JOIN category ON product.cat_id=category.cat_id WHERE product.pro_id = $pro_id";
    $resultDetailProCate = mysqli_query($conn, $sqlDetailProCate);
    $rowDetailProCate = mysqli_fetch_row($resultDetailProCate);

    $sqlDetailPro = "SELECT * FROM product INNER JOIN size ON product.size_id=size.size_id WHERE product.pro_id = $pro_id";
    $resultDetailPro = mysqli_query($conn, $sqlDetailPro);
    $rowDetailPro = mysqli_fetch_row($resultDetailPro);

    $sqlDetailProColor = "SELECT * FROM product INNER JOIN color ON product.col_id=color.col_id WHERE product.pro_id = $pro_id";
    $resultDetailProColor = mysqli_query($conn, $sqlDetailProColor);
    $rowDetailProColor = mysqli_fetch_row($resultDetailProColor);

    $sqlDetailProFac = "SELECT * FROM product INNER JOIN factory ON product.fac_id=factory.fac_id WHERE product.pro_id = $pro_id";
    $resultDetailProFac = mysqli_query($conn, $sqlDetailProFac);
    $rowDetailProFac = mysqli_fetch_row($resultDetailProFac);

    if(!isset($_SESSION["cart"])){//Nếu nó k có thì sẽ tạo ra mảng kết hợp 
        $cart = array(
            $pro_id => array(
                'name'=> $rowDetailPro[1],
                'category'=> $rowDetailProCate[12],
                'images'=>  $rowDetailPro[5],
                'factory'=>  $rowDetailProFac[12],
                'size'=>  $rowDetailPro[12],
                'color'=>  $rowDetailProColor[12],
                'quantity'=>  $num,
                'price'=>  (int) $rowDetailPro[6],
            )
        );
    }
    else{
         $cart = $_SESSION["cart"];
         if(array_key_exists($pro_id,$cart)){// Kiểm tra nếu người dùng mua tiếp mà trùng id với cái cũ thì cộng số lượng lên
        
                $cart[$pro_id] = array(
                    'name'=> $rowDetailPro[1],
                    'category'=> $rowDetailProCate[12],
                    'images'=>  $rowDetailPro[5],
                    'factory'=>  $rowDetailProFac[12],
                    'size'=>  $rowDetailPro[12],
                    'color'=>  $rowDetailProColor[12],
                    'quantity'=> $cart[$pro_id]["quantity"] + $num,
                    'price'=> (int) $rowDetailPro[6],
                );
        
         }
         else{// nếu như khách hàng mua thêm mà k hiện vào thì nó giữ nguyên cái cũ
            $cart[$pro_id] = array(
                'name'=> $rowDetailPro[1],
                'category'=> $rowDetailProCate[12],
                'images'=>  $rowDetailPro[5],
                'factory'=>  $rowDetailProFac[12],
                'size'=>  $rowDetailPro[12],
                'color'=>  $rowDetailProColor[12],
                'quantity'=> $num,
                'price'=>  (int) $rowDetailPro[6],
            );
         }
    }
    $_SESSION["cart"] = $cart;
        
        $numberProduct = 0;
        foreach($_SESSION["cart"] as $key=>$value){
            $numberProduct +=$value["quantity"];
        }
        echo $numberProduct;
 }
?>