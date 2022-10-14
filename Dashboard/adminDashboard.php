<?php 
    include 'dasboardHead.php';
    if(!isset($_SESSION['admin'])){
     header('LOCATION:'.SITEURL);
     unset($_SESSION['admin']);
     }; 
    include 'adminSlidebar.php'; 
    include 'dashboardHeader.php'; 
    include 'adminDashboardContent.php'; 
    include 'dashboardFooter.php'; 
?>
       

    


    
