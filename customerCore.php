<?php 
include("include/connect.php");

if(isset($_REQUEST["customer_name"])){
    $customer_name=$_REQUEST['customer_name'];
}else{
    header('location:customer.php');
}

if(isset($_REQUEST["customer_email"])){
    $customer_email=$_REQUEST['customer_email'];
}else{
    header('location:customer.php');
}
if(isset($_REQUEST["customer_location"])){
    $customer_location=$_REQUEST['customer_location'];
}else{
    header('location:customer.php');
}
$query = "INSERT INTO customer_table (customer_name,customer_email,customer_location) VALUES ('{$customer_name}','{$customer_email}','{$customer_location}')";
$runQuery=mysqli_query($connect,$query);
if($runQuery){
    header("location:customer.php?success");

}else{
    header("location:customer.php?error");
}

?>