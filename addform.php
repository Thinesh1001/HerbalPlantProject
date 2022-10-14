<?php include 'head.php'; ?> 
<h1>Add Product</h1>
<form action="saveProduct.php" method="post" enctype="multipart/form-data">
    <label for="product_name">Name</label>
    <input type="text" name="product_name" id="product_name" placeholder="Enter Product Name" required>
    <label for="product_price">Price</label>
    <input type="text" name="product_price" id="product_price" placeholder="Enter Product Price" required>
    <label for="product_category">Category</label>
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
    <label for="product_image">image</label>
    <input type="file" name="product_image" id="product_image" required>
    <label for="product_stock_available">Product Stock Available</label>
    <input type="number" name="product_stock_available" id="product_stock_available" placeholder="Enter Product Stock Available" required>
    <label for="product_stock_value">Stock Value</label>
    <input type="number" name="product_stock_value" id="product_stock_value" placeholder="Enter Product Stock Value" required>
    <button type="submit" x>submit</button>
</form>