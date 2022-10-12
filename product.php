
<section class="product">
    <div class="container">
        <h2>Latest Products</h2>
        <hr>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `tbl_products` WHERE `product_stock_available` > 0 ORDER BY `product_id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['product_id'];
                    $title = $row['product_name'];
                    $price = $row['product_price'];
                    $image_name = $row['product_image'];
            ?>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src=<?php echo SITEURL."/assets/images/product/".$image_name;?> alt="">
                        <h2 class="product_name">
                            <a href=""><?php echo $title; ?></a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">LKR <?php echo number_format($price,2, '.', ','); ?></h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo '<div class="alert alert-danger">No Product Found</div>';
            }
            ?>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/images/plant3.png" alt="">
                        <h2 class="product_name">
                            <a href="">Mint</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">LKR 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/images/plant4.png" alt="">
                        <h2 class="product_name">
                            <a href="">lemonfresh-mosquito-fighter</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">LKR 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/images/plant5.png" alt="">
                        <h2 class="product_name">
                            <a href="">mintfresh-los</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">LKR 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/images/plant6.png" alt="">
                        <h2 class="product_name">
                            <a href="">orangefresh-los</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">LKR 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>