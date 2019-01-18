<?php 
    include 'config/database.php';

    $query = "SELECT * FROM owners";

    $resulat = mysqli_query($db,$query);

    while($rows=$resulat->fetch_assoc()){
        $total = $rows['payementOne'] + $rows['payementTwo'];
        $id = $rows['idNumber'];

        if($rows['totalPay'] ==0){
            if($rows['totalPay'] != $total){
                $update = "UPDATE owners SET status = 'No' WHERE idNumber='$id'";
                mysqli_query($db,$update);

                // die()
            }else{
                $update = "UPDATE owners SET status = 'OK' WHERE idNumber='$id'";
                mysqli_query($db,$update);
            }
        }
        
    }
?>