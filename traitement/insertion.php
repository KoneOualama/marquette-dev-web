<?php
    require 'connexion.php';

    //Verification s'il existe un poste dans le formulaire
    if(isset($_POST)){

        // recuperation des champs du formulaire
        $nom = $_POST['nom'];
        $article = $_POST['article'];
        $email = $_POST['email'];
        $telephone = $_POST['téléphone'];
        $message = $_POST['message'];
        

        //preparation de la requete au serveur
        $insert = $conn->prepare("INSERT INTO `inscription`(`nom`, `article`, `email`, `téléphone`, `message`) 
        VALUES (?,?,?,?,?)");
        // execution de la requete avec les données
        $insert->execute(array(
            $nom,$article,$email,$telephone,$message
        ));

        //redirection
        header("location:../form.php
        
        
        
        
        ");

    }

?>