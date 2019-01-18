<?php
    include 'config/database.php';

    // quand le formaulaire est soumi
    if(isset($_POST['importer'])){
        $fichier = $_FILES['ownerfile']['name'];

        // verification si le fichier est upload ou pas
        if($fichier){
            // ouverture temporaire du fichier
            $fichier_tmp = fopen($_FILES['ownerfile']['tmp_name'],'r');
        } else{
            echo "<p class='color:red'> Importation échouée</p>";
           
        }

        $row = 2;
        if (($handle = fopen($_FILES['ownerfile']['tmp_name'], "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num champs à la ligne $row: <br /></p>\n";
                $row++;
                for ($c=0; $c < $num; $c++) {
                    $columns = explode(";", $data[$c]);
                    $total = $columns[14] + $columns[15];
                    if($total == $columns[16]){
                        if($columns[17]== null){
                            $columns[17] = 'Ok';
                            echo $columns[17];
                        }
                    }else{
                       
                        if($columns[17]== null){
                            $columns[17] = 'Ok';
                            echo $columns[17];
                        }
                    }
                    $query = "INSERT INTO owners (idNumber,firstName,lastName,company,address,city,country,state,zip,phone,fax,email,web,payementOne,payementTwo,totalPay,status)
                        VALUES('$columns[0]','$columns[1]','$columns[2]','$columns[3]','$columns[4]','$columns[5]','$columns[6]','$columns[7]','$columns[8]','$columns[9]','$columns[10]','$columns[11]','$columns[12]','$columns[13]','$columns[14]','$columns[15]','$columns[16]')";

                    $resultat = mysqli_query($db,$query);

                    if ($resultat) {
                        echo '<p style="color:green">Importation reussie</p>';
                    } else{
                        die(mysqli_error($db));
                    }
            
                }
            }
            fclose($handle);
        }
    }
?>

<?php include 'views/form.views.php';?>