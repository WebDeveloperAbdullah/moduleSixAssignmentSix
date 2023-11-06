<?php 
include("include/header.php");

?>


<div class="container-sm" id="min_body">

<h1>Customer</h1>

<div id="form_body">
<form action="customerCore.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Name</label>
    <input type="text" name="customer_name" class="form-control" id="exampleInputEmail1" placeholder="Customer Name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Email</label>
    <input type="email" name="customer_email" class="form-control" id="exampleInputEmail1" placeholder="Customer Email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Location</label>
    <input type="text" name="customer_location" class="form-control" id="exampleInputEmail1" placeholder="Customer Location">
    
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
      <th scope="col">Customer Email</th>
      <th scope="col">Customer Location</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$showQuery="SELECT * FROM customer_table ";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $customer_id=$row['customer_id'];
    $customer_name=$row['customer_name'];
    $customer_email=$row['customer_email'];
    $customer_location=$row['customer_location'];

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $customer_id;?></th>
      <td><?php echo $customer_name;?></td>
      <td><?php echo $customer_email;?></td>
      <td><?php echo $customer_location;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<?php 
include("include/footer.php");

?>

