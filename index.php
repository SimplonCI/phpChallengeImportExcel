<?php
    include 'config/database.php';
    

    // si le formulaire est soumi

    if(isset($_POST['valider'])){
        $search = addslashes($_POST['search']);

        if(!empty($search)){
            $query = "SELECT * FROM owners WHERE idNumber='$search'";
            // excution de la requete
            $resultat = mysqli_query($db,$query);

            
            // if($resultat){
            //     $owner = $resultat ->fetch_assoc();

            //     // $owner = $array['firstName'];
            // }else{

            // }
        }
    }
?>


<?php include 'views/index.views.php'?>