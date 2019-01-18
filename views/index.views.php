<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="js/main.js" rel="stylesheet" />
    <title>Inssurance</title>
</head>
<body>

    <div class="s130">
      <form action="index.php" method="post">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input name="search" id="search type="text" placeholder="entrer votre Id number" />
          </div>
          <div class="input-field second-wrap">
            <input type="submit" name="valider" class="btn-search" type="button" value="Valider">
          </div>
        </div>
        <span class="info">
            <?php if(isset($resultat) && $resultat): ?>
                <?php while( $owner = $resultat ->fetch_assoc()):?>
                    <?php if($owner['payementTwo'] == 0):?>
                        Hello,<?php echo $owner['firstName'].' '.$owner['lastName'] ?>, we are sorry to tell you that you
                        owe us <?php echo $owner['totalPay'] - $owner['payementOne'] ?>. And you have to pay before the December
                        2019. Else we will grab your properties
                    <?php elseif(($owner['payementTwo'] + $owner['payementTwo']) != $owner['totalPay']):?>
                        Hello,<?php echo $owner['firstName'].' '.$owner['lastName'] ?>, we are sorry to tell you that you
                        owe us <?php echo $owner['totalPay'] - $owner['payementOne'] ?>. And you have to pay before the December
                        2019. Else we will grab your properties
                    <?php else:?>
                        Hello, <?php echo $owner['firstName'].' '.$owner['lastName'] ?>, We are happy to tell you that you
                        don’t owe us some money.
                    <?php endif ?>
                <?php endwhile ?>
            <?php else: ?>
                    
            <?php endif ?>
        </span>
      </form>
    </div>

        <!-- <form action="index.php" method="post">
            <input type="text" name="search" id="search">
            <input type="submit" value="search" name="valider">
        </form> -->

       
</body>
</html>