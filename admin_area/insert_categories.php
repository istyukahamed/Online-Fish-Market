<?php
 include('../includes/connect.php');
 if(isset($_POST['insert_cat'])) {
   $category_title=$_POST['cat_title'];
   // select data from database 
   $select_query="select * from categories where category_title='$category_title'";
   $result_select=mysqli_query($con,$select_query) or die("Query failed. ". mysqli_error($con));
   $number=mysqli_num_rows($result_select);
   if($number>0) {
    echo "<script>alert('This Category is present inside the Database')</script>";
   }else{     
    $insert_query="insert into categories(category_title) values ('{$category_title}')";
    $result=mysqli_query($con,$insert_query) or die("Query failed. ". mysqli_error($con));
    if($result) {                                     
      echo "<script>alert('Category has been inserted successfully'); location.href='index.php?view_categories';</script>";
    }
  }

 }
?>


<h2 class="text-center my-3">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories" >

</div>

</form>
