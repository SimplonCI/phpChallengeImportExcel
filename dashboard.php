<?php 
    include 'config/database.php';
    $remain = false;
    $total_remain = 0;
    $nombre = 0;
    $resultat = mysqli_query($db,"SELECT * FROM owners");

    $results = mysqli_query($db,"SELECT * FROM owners");

   
                        
   
?>

<?php include 'views/dashboard.views.php';?>