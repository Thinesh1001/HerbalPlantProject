
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
                Supplier Details
            </div>
            <form class="registrationForm" action="">
                <div class="reform-control">
                    <label class="re-label" for="">Supplier Name</label>
                    <label class="re-label" for="">Username</label>                
                </div>
                <div class="reform-control">                    
                    <label class="re-label" for="">Supplier Description</label>
                    <label class="re-label" for="">Username</label>                  
                </div>
                <div class="reform-control">
                </div>
                <div>
                    <a href="supplier.ResetPwd.php">
                    <p>Password Reset</p>
                    </a>
                </div>
            
            </form>
        </div>
    </div>

    <?php  include 'dashboardFooter.php'; ?>