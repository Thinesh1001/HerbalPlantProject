       
       
<?php 
    include 'dasboardHead.php'; ?>

<section class="vh-100" style="background: mediumseagreen;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets/images/supplierLogo.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fa fa-truck fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Supplier Login </span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Supplier Log in Here</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    
                    <button class="btn btn-dark btn-lg btn-block" style="border-radius: 50px;
                      font-weight: 500; type="button">   <a href="SuplierDasboard.php">Login</a> </button>        
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;font-size: 20px; font-weight: 600;">If your Admin 
                      <button class="btn" style="background-color: mediumaquamarine;border-radius: 49px;
                      font-weight: 900;"> <a style="color: #393f81;" href="adminLoginPage.php"">Admin Click Here</a> 
                      </button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
           
<php? include 'dashboardFooter.php'; ?>
       

    


    
