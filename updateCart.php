<?php 
ob_start();
session_start();
include("connection.php");
if(isset($_POST["id"]) && isset($_POST["number"])){
    $pro_id= $_POST["id"];
    $num = $_POST["number"];
    if(isset($_SESSION["cart"])){
        $cart = $_SESSION["cart"];
        if(array_key_exists($pro_id,$cart)){
            if($num>0){//Khi nó khác 0 thì sẽ có:
                $cart[$pro_id] = array(
                    'name'=> $cart[$pro_id]["name"],
                    'category'=> $cart[$pro_id]["category"],
                    'images'=>  $cart[$pro_id]["images"],
                    'factory'=>  $cart[$pro_id]["factory"],
                    'size'=>  $cart[$pro_id]["size"],
                    'color'=>  $cart[$pro_id]["color"],
                    'quantity'=> $num,
                    'price'=> (int) $cart[$pro_id]["price"],
                );
            }
            else{//Trường hợp này bằng 0 và nhỏ hơn 0 thì hủy đơn hàng
                unset($cart[$pro_id]);
            }
        
        }
    }
    $_SESSION["cart"] = $cart;
}
?>