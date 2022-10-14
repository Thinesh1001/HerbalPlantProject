
   <?php  include 'dasboardHead.php';
   if(!isset($_SESSION['admin'])){
    header('LOCATION:'.SITEURL);
    unset($_SESSION['admin']);
    };  ?>
   <?php  include 'adminSlidebar.php'; ?>
   <?php  include 'dashboardHeader.php'; ?>
  
  

       


   <div class="register">
    <div class="container">
        <div class="form-head">
            Reset Your Password
        </div>
        <form class="registrationForm" action="">
            <div class="reform-control">
                <label class="re-label" for="">Username</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <label class="re-label" for="password">Password</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <label class="re-label" for="password"> Conform Password</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <button class="resubmit-btn">Submit</button>
            </div>
         
         
        </form>
    </div>
</div>


    <?php  include 'dashboardFooter.php'; ?>