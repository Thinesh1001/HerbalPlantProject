
<?php 
    include 'dasboardHead.php'; 
    include 'adminSlidebar.php'; 
    include 'dashboardHeader.php';
    if(!isset($_SESSION['admin'])){
        header('LOCATION:'.SITEURL);
        unset($_SESSION['admin']);
        };  
?> 	      
      <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                    <div class="row my-5">
                        <h3 class="fs-4 mb-3">Recent Orders</h3>
                        <div class="col">
                            <table class="table bg-white rounded shadow-sm  table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Categoey</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mint</td>
                                        <td>Plants</td>                                    
                                        <th scope="col"><button class="btn" style="background:#198754; ">Edit</button></th>
                                        <th scope="col"><button class ="btn" style="background:red;">Update</button></th>
                                    </tr>                          
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div> 
<?php include 'dashboardFooter.php'; ?>  
