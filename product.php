<?php 
include("include/header.php");

?>


<div class="container-sm" id="min_body">

<h1>Product</h1>

<div id="form_body">
<form action="customerCore.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Category </label>
    <select class="form-control"  name="catagory_id" >
      <!-- php-code -hear -->
      <option value="" disabled>Product Category</option>
      <?php
      $categoryData="SELECT * FROM category_table";
      $runQuery=mysqli_query($connect,$categoryData);
      if($runQuery){
        while($row=mysqli_fetch_array($runQuery)){
          $category_id=$row["category_id"];
          $category_name=$row["category_name"];
          
      ?>
      <!-- php-code -hear -->
        <option value="<?php echo$category_id?>"><?php echo$category_name?></option>
        <?php }}?>
    </select>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description</label>
   <textarea name="product_description" class="form-control"></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Product Price">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description </th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$showQuery="SELECT * FROM product_table ";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $product_id=$row['product_id'];
    $product_name=$row['product_name'];
    $product_description=$row['product_description'];
    $product_price=$row['product_price'];

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $product_id;?></th>
      <td><?php echo $product_name;?></td>
      <td><?php echo $product_description;?></td>
      <td><?php echo $product_price;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<?php 
include("include/footer.php");

?>

