<?php
    //connexion avec la base de donnée portant le nom Gestion_Vente

    $bd = new PDO("mysql:host=localhost; dbname=gestion_vente",'root',"");

    if (isset($_POST["soumettre"])) {
        if (isset($_POST['email']) && isset($_POST["password"])) {
    
            // Assurez-vous d'avoir une connexion à la base de données ($bd)
            // Remplacez le nom de la table et le champ pour correspondre à votre structure
            $req = $bd->prepare("SELECT * FROM utilisateur WHERE email=? AND password=?");
    
            // Utilisez des variables liées pour éviter les injections SQL
            $req->execute([$_POST['email'], $_POST['password']]);
    
            // Vérifiez s'il y a des résultats
            $user = $req->fetch();
    
            if ($user) {
                // Démarrer la session avant de l'utiliser
                session_start();
    
                // Assurez-vous de stocker les informations nécessaires dans la session
                $_SESSION['email'] = $user['email'];
    
                // Redirigez vers la page appropriée
                echo "<script>window.location.href='../Gestion_Admin/'</script>";
            } else {
                echo "<script>alert('Identifiants invalides')</script>";
            }
    
        } else {
            echo "<script>alert('Entrez les valeurs valides')</script>";
        }
    }