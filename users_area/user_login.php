<?php 
    session_start();
    if(isset($_SESSION['logged_user_id'])){
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    
  <!-- bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body{
        overflow-x:hidden;
        }
  </style>

</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
                    <!-- user name field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
                    
                     <!-- password filed -->
                     <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
                    </div>
                    
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php 
if(isset($_POST['user_login'])) {
include('../includes/connect.php');
$user_username = $_POST['user_username'];
$user_password =$_POST['user_password'];

$select_query = "SELECT * FROM user_table WHERE username='$user_username'";
$result = mysqli_query($con, $select_query);
 
if ($result) {
    $rows_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    if ($rows_count > 0) {
        if (password_verify($user_password,$row_data['user_password'])) {
            
            $_SESSION['user_logged']=1;
            $_SESSION['logged_user_name']=$row_data['username'];
            $_SESSION['logged_user_id']=$row_data['user_id'];
            echo "
            <script>alert('Login successful')
            setTimeout(()=>{
                location.href='../cart.php';
            },500);
            </script>";
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
}

?>