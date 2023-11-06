<?php 
include("include/connect.php");

if(isset($_REQUEST["product_id"])){
    $product_id=$_REQUEST['product_id'];
}else{
    header('location:order.php');
}
if(isset($_REQUEST["customer_id"])){
    $customer_id=$_REQUEST['customer_id'];
}else{
    header('location:order.php');
}
if(isset($_REQUEST["quantity"])){
    $quantity=$_REQUEST['quantity'];
}else{
    header('location:order.php');
}

$checkQuery="SELECT * FROM `product_table` WHERE product_id='{$product_id}' ";
$runChakeQuery=mysqli_query($connect,$checkQuery);
if(mysqli_num_rows($runChakeQuery)){
    while( $row = mysqli_fetch_array($runChakeQuery)){
        $product_id=$row["product_id"];
        $product_price=$row["product_price"];
}
$totalAmount=($quantity*$product_price);
}
$query = "INSERT INTO order_table (customer_id,product_id, total_amount,quantity) VALUES ('{$customer_id}','{$product_id}',{$totalAmount},'{$quantity}')";
$runQuery=mysqli_query($connect,$query);
if($runQuery){
    header("location:order.php?success");

}else{
    header("location:order.php?error");
}

?>