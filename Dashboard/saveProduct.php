<?php include '../config.php'; ?>
<?php
if(isset($_POST['submit'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_stock_available = $_POST['product_stock_available'];
    $product_stock_value = $_POST['product_stock_value'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['tmp_name'];
    $product_image_type = $_FILES['product_image']['type'];
    $product_image_size = $_FILES['product_image']['size'];
    $product_image_error = $_FILES['product_image']['error'];
    $product_image_ext = explode('.',$product_image);
    $product_image_actual_ext = strtolower(end($product_image_ext));
    $allowed = array('jpg','jpeg','png');
    if(in_array($product_image_actual_ext,$allowed)){
        if($product_image_error === 0){
            if($product_image_size < 1000000){
                $product_image_new_name = uniqid('',true).".".$product_image_actual_ext;
                $product_image_destination = '../assets/images/product/'.$product_image_new_name;
                move_uploaded_file($product_image_temp,$product_image_destination);
                $sql = "INSERT INTO `tbl_products`(`product_name`, `product_price`, `product_category`, `product_image`, `product_stock_available`, `product_stock_value`) VALUES ('$product_name','$product_price','$product_category','$product_image_new_name','$product_stock_available','$product_stock_value')";
                $res = mysqli_query($conn,$sql);
                if($res){
                    $_SESSION['add'] = '<div class="alert alert-success">Product Added Successfully</div>';
                    header('location:'.SITEURL.'dashboard/addProducts.php');
                }else{
                    $_SESSION['add'] = '<div class="alert alert-danger">Failed to Add Product</div>';
                    header('location:'.SITEURL.'dashboard/addProducts.php');
                }
            }else{
                $_SESSION['add'] = '<div class="alert alert-danger">Image Size is too large</div>';
                header('location:'.SITEURL.'dashboard/addProducts.php');
            }
        }else{
            $_SESSION['add'] = '<div class="alert alert-danger">Error Uploading Image</div>';
            header('location:'.SITEURL.'dashboard/addProducts.php');
        }
    }else{
        $_SESSION['add'] = '<div class="alert alert-danger">Image Type is not supported</div>';
        header('location:'.SITEURL.'dashboard/addProducts.php');
    }
}
?>