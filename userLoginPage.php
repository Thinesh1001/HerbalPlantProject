<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<div class="register">
    <div class="container">
        <div class="form-head">
            Sign in
        </div>
        <form class="registrationForm" action="" method="POST">
            <div class="reform-control">
                <label class="re-label" for="">Username</label>
                <input class="re-input" type="text" placeholder="username" id="username" name="username">
            </div>
            <div class="reform-control">
                <label class="re-label" for="password">Password</label>
                <input class="re-input" type="password" placeholder="password" id="password" name="password">
            </div>
            <div class="reform-control">
                <button class="resubmit-btn" type="submit" name="submit" value="submit">Submit</button>
            </div>
            <div>
                <a href="userRegisterPage.php">
                <p>Create New Account</p>
                </a>
            </div>
         
        </form>
    </div>
</div>
<?php 
 if(isset($_POST['submit']))
 {
    
     $username=$_POST['username'];
     $password=md5($_POST['password']);

    $sql = "SELECT *FROM tbl_customers WHERE customer_name='$username' AND customer_pwd ='$password'";
    $res=mysqli_query($conn,$sql);

    $count = mysqli_num_rows($res);


    if($count==1)
    {   

        $_SESSION['user'] = $username;
        $_SESSION['login']="<div class='success'>Login Successful</div>";
        echo "<script>window.location.href='index.php'</script>";
    } 
    else
    {
        $_SESSION['login']="<div class='error text-center'>Username or Password didnot match</div>";
        header("location:".SITEURL.'admin/login.php');
    }
 }
?>
<?php include 'footer.php'; ?>