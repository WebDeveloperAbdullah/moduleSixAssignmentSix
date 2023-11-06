<?php 
include("include/header.php");

?>


<div class="container-sm" id="min_body">

<h1>Category</h1>

<div id="form_body">
<form action="category.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div id="table_body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  <tbody>
<!-- php-code-start -->

<?php 
$showQuery="SELECT * FROM category_table ";
$runQuery=mysqli_query($connect,$showQuery);
while($row=mysqli_fetch_array($runQuery)){
    $category_id=$row['category_id'];
    $category_name=$row['category_name'];

?>
<!-- php-code-end -->

    <tr>
      <th scope="row"><?php echo $category_id;?></th>
      <td><?php echo $category_name;?></td>
 
    </tr>
 <?php }?>

  </tbody>
</table>
</div>


</div>

<?php 
include("include/footer.php");

?>

