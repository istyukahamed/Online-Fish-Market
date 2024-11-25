<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    
  <!-- bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New Admin Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- user name field -->
                    <div class="form-outline mb-4">
                        <label for="admin_username" class="form-label">Username</label>
                        <input type="text" id="admin_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="admin_username"/>
                    </div>
                    <!-- email filed -->
                    <div class="form-outline mb-4">
                        <label for="admin_email" class="form-label">Email</label>
                        <input type="email" id="admin_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="admin_email"/>
                    </div>
                    <!-- image filed -->
                    <div class="form-outline mb-4">
                        <label for="admin_image" class="form-label">Admin Image</label>
                        <input type="file" id="admin_image" class="form-control" required="required" name="admin_image"/>
                    </div>
                     <!-- password filed -->
                     <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" id="admin_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="admin_password"/>
                    </div>
                    <!-- Confirm password filed -->
                    <div class="form-outline mb-4">
                        <label for="conf_admin_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_admin_password" class="form-control" placeholder="Enter confirm password" autocomplete="off" required="required" name="conf_admin_password"/>
                    </div>
                     <!-- Address field -->
                     <div class="form-outline mb-4">
                        <label for="admin_address" class="form-label">Address</label>
                        <input type="text" id="admin_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required" name="admin_address"/>
                    </div>
                      <!-- Contact field -->
                      <div class="form-outline mb-4">
                        <label for="admin_contact" class="form-label">Contact</label>
                        <input type="text" id="admin_contact" class="form-control" placeholder="Enter your Mobile number" autocomplete="off" required="required" name="admin_contact"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="admin_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ? <a href="admin_login.php" class="text-danger"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<!-- php code -->
<?php 
if(isset($_POST['admin_register'])) {
    $admin_username=$_POST['admin_username'];
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $hash_password=md5($admin_password);
    $conf_admin_password=$_POST['conf_admin_password'];
    $admin_address=$_POST['admin_address'];
    $admin_contact=$_POST['admin_contact'];
    $admin_image=$_FILES['admin_image']['name'];
    $admin_image_tmp=$_FILES['admin_image']['tmp_name'];

    // select query
    $select_query="select * from `admin_login` where admin_username='$admin_username' or admin_email='$admin_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('User Name or Email already exist')</script>";
    } else if($admin_password!=$conf_admin_password){
        echo "<script>alert('Password do not match')</script>";
    }
    
    else {

    // insert Query
    move_uploaded_file($admin_image_tmp,"admin_images/$admin_image");
    $insert_query="insert into `admin_login` (admin_username,admin_email,admin_password,admin_img,admin_address,admin_contact)
    values ('$admin_username','$admin_email','$hash_password','$admin_image','$admin_address','$admin_contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
        
        echo "<script>alert('Data inserted Successfully')
        setTimeout(()=>{
            location.href='admin_login.php';
        },500);</script>";
    }else{
        die(mysqli_error($con));
    }
}

}

?>