
<?php 
    include 'dasboardHead.php'; 
    include 'adminSlidebar.php'; 
    include 'dashboardHeader.php'; 
?> 
    

    <div class="wrapper">
    <div class="title">
      Add New Product
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Product Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Product category</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Product Image</label>
          <input type="file" class="input">
       </div>  
      
        <div class="inputfield">
          <label>Product Strock Available</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="Available">Available</option>
              <option value="Unavailabe">Unavailabe</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Product Stock Quantity </label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
        <input type="submit" value="Clear" class="btn">
      </div>
      
    </div>
</div>	       
<?php include 'dashboardFooter.php'; ?>  
