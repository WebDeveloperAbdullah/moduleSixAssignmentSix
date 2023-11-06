<?php 
include("include/header.php");

?>


<div class="container-sm" id="min_bodyC">
<h1>task 01</h1>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
    
      <th scope="col"> ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Location</th>
      <th scope="col"> Total Order</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$showQuery = "SELECT customer_table.customer_id,customer_table.customer_name,customer_table.customer_email,customer_table.customer_location, order_table.order_id
FROM customer_table
LEFT JOIN order_table ON customer_table.customer_id = order_table.order_id
ORDER BY customer_table.customer_id";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $customer_id=$row['customer_id'];
    $customer_name=$row['customer_name'];
    $customer_email=$row['customer_email'];
    $customer_location=$row['customer_location'];

    $ChakeOrderQuery="SELECT * FROM `order_table` WHERE customer_id='{$customer_id}'";
    if($totalrow= mysqli_num_rows(mysqli_query($connect,$ChakeOrderQuery))){

    }

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $customer_id;?></th>
      <td><?php echo $customer_name;?></td>
      <td><?php echo $customer_email;?></td>
      <td><?php echo $customer_location;?></td>
      <td><?php echo $totalrow;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<div class="container-sm" id="min_bodyC">
<h1>task 02</h1>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
    
      <th scope="col"> Order ID</th>
      <th scope="col"> Product Name</th>
      <th scope="col"> Quantity</th>
      <th scope="col"> Total Amount</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$orderQuery = "SELECT order_table.order_id,order_table.total_amount,order_table.quantity,product_table.product_id, product_table.product_name
FROM product_table
LEFT JOIN order_table ON order_table.product_id = product_table.product_id
ORDER BY order_table.order_id";
$runOrderQuery=mysqli_query($connect,$orderQuery);
while($orderRow=mysqli_fetch_array($runOrderQuery)){
    $order_id=$orderRow['order_id'];
    $product_name=$orderRow['product_name'];
    $quantity=$orderRow['quantity'];
    $total_amount=$orderRow['total_amount'];



?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $order_id;?></th>
      <td><?php echo $product_name;?></td>
      <td><?php echo $quantity;?></td>
      <td><?php echo $total_amount;?></td>
   
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<div class="container-sm" id="min_bodyC">
<h1>task 03</h1>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
    
      <th scope="col"> ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
     
      <th scope="col"> Total Order</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 


$categoryQuery = "SELECT order_table.order_id,order_table.total_amount,order_table.quantity,product_table.product_id, product_table.product_name,category_table.category_id,category_table.category_name
FROM order_table
INNER JOIN product_table ON order_table.product_id = product_table.product_id
INNER JOIN category_table ON order_table.category_id=category_table.category_id
ORDER BY order_table.total_amount DESC ";
$runCategoryQuery=mysqli_query($connect,$categoryQuery);
while($row=mysqli_fetch_array($runCategoryQuery)){
    $order_id=$row['order_id'];
    $category_name=$row['category_name'];
    $product_name=$row['product_name'];
    $total_amount=$row['total_amount'];

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $order_id;?></th>
      <td><?php echo $category_name;?></td>
      <td><?php echo $product_name;?></td>
      <td><?php echo $total_amount;?></td>
    
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>
<div class="container-sm" id="min_bodyC">
<h1>task 04</h1>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
    

      <th scope="col">Customer  Name</th>
   
      <th scope="col"> Total Purchase Amount</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$showQuery = "SELECT customer_table.customer_id,customer_table.customer_name,order_table.order_id,order_table.total_amount
FROM order_table
LEFT JOIN customer_table ON customer_table.customer_id = order_table.customer_id
ORDER BY order_table.total_amount DESC";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $customer_id=$row['customer_id'];
    $customer_name=$row['customer_name'];
    $order_id=$row['order_id'];
    $total_amount=$row['total_amount'];
    

    $ChakeOrderQuery="SELECT * FROM `order_table` WHERE customer_id='{$customer_id}'";
    if($totalrow= mysqli_num_rows(mysqli_query($connect,$ChakeOrderQuery))){

    }

?>
<!-- php-code-end -->

    <tr>
 
     
      <td><?php echo $customer_name;?></td>
      <td><?php echo $total_amount;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<?php 
include("include/footer.php");

?>

