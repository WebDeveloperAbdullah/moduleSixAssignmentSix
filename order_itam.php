<?php 
include("include/header.php");

?>


<div class="container-sm" id="min_body">

<h1>Category</h1>

<div id="form_body">
<form action="orderCore.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <select class="form-control"  name="product_id" >
      <!-- php-code -hear -->
      <option value="" disabled>Product Name</option>
      <?php
      $productData="SELECT * FROM product_table";
      $runQuery=mysqli_query($connect,$productData);
      if($runQuery){
        while($row=mysqli_fetch_array($runQuery)){
          $product_id=$row["product_id"];
          $product_name=$row["product_name"];
          
      ?>
      <!-- php-code -hear -->
        <option value="<?php echo$product_id?>"><?php echo$product_name?></option>
        <?php }}?>
    </select>
    
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Name</label>
    <select class="form-control"  name="customer_id" >
      <!-- php-code -hear -->
      <option value="" disabled>Customer Name</option>
      <?php
      $customerData="SELECT * FROM customer_table";
      $customerrunQuery=mysqli_query($connect,$customerData);
      if($customerrunQuery){
        while($customerRow=mysqli_fetch_array($customerrunQuery)){
          $customer_id=$customerRow["customer_id"];
          $customer_name=$customerRow["customer_name"];
          
      ?>
      <!-- php-code -hear -->
        <option value="<?php echo$customer_id?>"><?php echo$customer_name?></option>
        <?php }}?>
    </select>    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="Product Quantity">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Product Name </th>
      <th scope="col">Total Price</th>
      <th scope="col">Product Quantity</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 

$showQuery="SELECT order_table.order_id,order_table.customer_id,order_table.product_id,order_table.total_amount,order_table.quantity,customer_table.customer_id,customer_table.customer_name,product_table.product_id,product_table.product_name
FROM order_table
INNER JOIN customer_table ON order_table.customer_id=customer_table.customer_id
INNER JOIN product_table ON order_table.product_id=product_table.product_id ORDER BY order_table.order_id";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $order_id=$row['order_id'];
    $customer_name=$row['customer_name'];
    $product_name=$row['product_name'];
    $total_amount=$row['total_amount'];
    $quantity=$row['quantity'];

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $order_id;?></th>
      <td><?php echo $customer_name;?></td>
      <td><?php echo $product_name;?></td>
      <td><?php echo $total_amount;?></td>
      <td><?php echo $quantity;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<?php 
include("include/footer.php");

?>

