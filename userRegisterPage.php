
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<div class="register">
    <div class="container">
    <?php
        if(isset($_SESSION['register'])){
            echo $_SESSION['register'];
            unset($_SESSION['register']);
        }
        ?>
        <div class="form-head">
            Create New Account
        </div>
        <form class="registrationForm" action="" method="POST">
        <div class="reform-control">
                <label class="re-label" for="">Username</label>
                <input class="re-input" type="text" placeholder="" name="username" required>
            </div>
            <div class="reform-control">
                <label class="re-label" for="email">Email</label>
                <input class="re-input" type="text" placeholder="" name="customer_email" required>
            </div>
            <div class="reform-control">
                <label class="re-label" for="password">Password</label>
                <input class="re-input" type="password" placeholder="" name="password" id="password" >
            </div>
            <div class="reform-control">
                <label class="re-label" for="">Confirm Password</label>
                <input class="re-input" type="password" placeholder="" name="cPassword" id="cPassword" onkeyup="validatePassword();" required>
                <span id="demo"></span>
            </div>
            <div class="reform-control">
                <label class="re-label" for="">Phone Number</label>
                <input class="re-input" type="number" placeholder="" name="customer_phone">
            </div>
            <div class="reform-control">
                <label class="re-label" for="">Address</label>
                <textarea class="re-input" placeholder="" name="customer_address"></textarea> 
            </div>
            <div class="reform-control">
                <label class="re-label" for="">City</label>
                <input class="re-input" type="text" placeholder="" name="customer_city">
            </div>
            <div class="reform-control">
                <label class="re-label" for="">Zip Code</label>
                <input class="re-input" type="text" placeholder="" name="customer_zip_code">
            </div>
            <div class="reform-control">
                <button class="resubmit-btn" type="submit" name="submit" value="submit">Submit</button>
            </div>
         
        </form>
    </div>
</div>
<script>
    //check if password and conform password are same
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("cPassword");

    function validatePassword(){
    console.log(password.value);
    if(password.value != confirm_password.value) {
        //add class to show error
        document.getElementById("demo").classList.remove("text-success");
        document.getElementById("demo").classList.add("text-danger");
        document.getElementById("demo").innerHTML="Password didnot match";
    } else {
        //remove class to show error
        document.getElementById("demo").classList.remove("text-danger");
        document.getElementById("demo").classList.add("text-success");
        document.getElementById("demo").innerHTML="Password matched";
    }
    };
</script>
<?php 
 if(isset($_POST['submit']))
 {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['customer_email'];
    $phone=$_POST['customer_phone'];
    $address=$_POST['customer_address'];
    $city=$_POST['customer_city'];
    $zip=$_POST['customer_zip_code'];


    $sql = "INSERT INTO `tbl_customers`(`customer_name`, `customer_pwd`, `customer_reg_date`, `customer_phone`, `customer_email`, `customer_address`, `customer_city`, `customer_zip_code`) VALUES ('$username','$password',CURRENT_TIMESTAMP,'$phone','$email','$address','$city','$zip')";
    $res=mysqli_query($conn,$sql);
    print_r($res);
    if($res==true)
    {
        $_SESSION['register']="<div class='text-success'>Register Successfully</div>";
        echo "<script>window.location.href='userLoginPage.php'</script>";
    }
    else
    {
        $_SESSION['register']="<div class='text-danger'>Failed to Register</div>";
        echo "<script>window.location.href='userRegisterPage.php'</script>";
    }
 }
?>
<?php include 'footer.php'; ?>
<?php include 'bottom.php'; ?>