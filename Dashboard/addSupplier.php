
<?php 
    include 'dasboardHead.php'; 
    include 'adminSlidebar.php'; 
    include 'dashboardHeader.php'; 
?> 
    

    <div class="wrapper">
    <div class="title">
      Add New Supplier
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Supplier Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Supplier category</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Supplier Image</label>
          <input type="file" class="input">
       </div>         
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
        <input type="submit" value="Clear" class="btn">
      </div>
      
    </div>
</div>	       
<?php include 'dashboardFooter.php'; ?>  
