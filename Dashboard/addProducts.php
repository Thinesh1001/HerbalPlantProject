
<?php 
    include 'dasboardHead.php'; 
    include 'adminSlidebar.php'; 
    include 'dashboardHeader.php'; 
?> 
    

    <div class="wrapper">
    <div class="title">
      Add New Product
    </div>
    <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
    <form action="saveProduct.php" method="post" enctype="multipart/form-data">
    <div class="form">
       <div class="inputfield">
          <label>Product Name</label>
          <input type="text" name="product_name" id="product_name" placeholder="Enter Product Name" class="input" required>
       </div>  
        <div class="inputfield">
        <label for="product_category">Category</label>
        <div class="custom_select">
         <select name="product_category" id="product_category">
         <?php 
        $sql = "SELECT * FROM `tbl_product_category`";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count>0){
            while($row=mysqli_fetch_assoc($res)){
                $id = $row['category_id'];
                $title = $row['category_name'];
            ?>
            <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
     <?php
            }
        }else{
            echo '<option value="">No Categroy Found</option>';
        }
             ?>
   </select>
   </div> 
       </div>  
       <div class="inputfield">
          <label>Product Image</label>
          <input type="file"  name="product_image" id="product_image" class="input" required >
       </div>  
        <div class="inputfield">
        <label for="product_price">Product Price</label>
       <input type="text" name="product_price" id="product_price" placeholder="Enter Product Price"  class="input" required>
       </div> 
       <div class="inputfield">
          <label>Product Strock Available</label>
          <div class="custom_select">
            <select  name="product_stock_available" id="product_stock_available" required>
              <option value="">Select</option>
              <option value="1">Available</option>
              <option value="0">Unavailabe</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Product Stock Quantity </label>
          <input type="number" class="input"  name="product_stock_value" id="product_stock_value" placeholder="Enter Product Quantity" required>
       </div> 
      <div class="inputfield">
      <button type="submit" value="submit" name="submit" class="btn">submit</button>
        <button  class="btn">Clear</button>
      </div>
      
    </div>
    </form>
</div>	       
<?php include 'dashboardFooter.php'; ?>  
