<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inssurance form</title>
</head>
<body>
    <h3>Veuillez choisir  un ficher csv</h3>

    <form action="form.php" method="post" enctype="multipart/form-data">
        <input type="file" name="ownerfile" id="ownerfile">
        <input type="submit" value="Importer" name="importer">

    </form>
</body>
</html>