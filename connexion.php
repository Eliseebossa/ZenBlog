<?php
   // inclure le traitement

   require 'traitement/config.php';

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.css">

</head>
<body>
    <div class="container col-6 offset-3 mt-5 pt-5">
        <h4>Connectez-vous</h4>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" class="form-control" placeholder="Elise@gmail.com" name="email">
            </div>
            <div class="form-group">
                <label for="">Mot de passe:</label>
                <input type="password" class="form-control" placeholder="...." name="password">
            </div>
            <button class=" btn btn-primary form-control mt-3" name="soumettre" type="submit">Send</button>
        </form>
    </div>
    <aside>
        <section class ="col-6 offset-3 mt-3">
            <button class="form-control "><a href="index.php" class="text-decoration-none">Retour</a></button>
        </section>
    </aside>
</body>
</html>l