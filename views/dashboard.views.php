<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id number</th>
                    <th>First name</th>
                    <th>name</th>
                    <th>Zip phone</th>
                    <th>Paid</th>
                    <th>Remain</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($resultat)):?>
                    <?php
                        while($rows = $results -> fetch_assoc()){
                            if(($rows['payementOne'] + $rows['payementTwo']) != $rows['totalPay']){
                                $nombre = $nombre + 1;
                            }
                       }
                       echo "<h1> Nombre total: $nombre </h1>"
                    ?>
                    
                    <?php while($owner = $resultat ->fetch_assoc()):?>
                       
                        <?php
                            if(($owner['payementOne'] + $owner['payementTwo']) != $owner['totalPay']){
                                $total_remain = 0;
                                    $remain= true;
                                    $total_remain = $owner['totalPay'] - ($owner['payementOne'] + $owner['payementOne']);
                            }
                        ?>

                        <?php if($owner['totalPay'] - ($owner['payementOne'] + $owner['payementOne']) != 0): ?>
                            <tr>
                                <td><?php echo $owner['idNumber']?></td>
                                <td><?php echo $owner['firstName']?></td>
                                <td><?php echo $owner['lastName']?>urgh</td>
                                <td><?php echo $owner['zip'].' '.$owner['phone']?> </td>
                                <td><?php echo $owner['payementOne']?></td>
                                <td><?php echo $owner['totalPay'] - ($owner['payementOne'])  ?></td>
                                <td><?php echo $owner['totalPay']?></td>
                            </tr>
                        <?php endif ?>
                    <?php endwhile?>
                   
                <?php endif?>
            </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>