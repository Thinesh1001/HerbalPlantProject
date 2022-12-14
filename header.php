<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/Logo1.png" alt="" height="36">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productCategory.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="allProducts.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">About us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 action-menu">
                        <form class="search-form">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success search-btn" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-heart"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cart4 position-relative">
                                    <span style="font-size: 12px"
                                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1 </span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i>
                                <?php if(isset($_SESSION['user'])){ echo $_SESSION['user'];} ?>
                            </a>
                            <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                                  <?php if(isset($_SESSION['user'])){ echo '<li><a class="dropdown-item" href="logout.php">Log Out</a></li>';}else{ echo '<li><a class="dropdown-item" href="userLoginPage.php">Log In</a></li><li><a class="dropdown-item" href="userRegisterPage.php">Register</a></li>';} ?> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>