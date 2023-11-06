<?php 
include("include/connect.php");

if(isset($_REQUEST["category_name"])){
    $category_name=$_REQUEST['category_name'];
}else{
    header('location:index.php');
}

$checkQuery="SELECT * FROM `category_table`  WHERE category_name='{$category_name}'";
$result=mysqli_query($connect,$checkQuery);	
if(mysqli_num_rows($result)<= 0){
$query = "INSERT INTO `category_table`(category_name) VALUES ('{$category_name}')";
$runQuery=mysqli_query($connect,$query);
if($runQuery){
    header("location:index.php?success");

}else{
    header("index.php?error");
}
}else{
    header("location:index.php?Al ready Add");
}
?>