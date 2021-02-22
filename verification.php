<?php
/**
 * Created by PhpStorm.
 * User: bounda
 * Date: 31/01/2021
 * Time: 12:03
 */
include_once 'inc/server.class.php';
$statusMsg = '';

//On verifie si le formulaire a ete envoye
if(isset($_POST['username'], $_POST['password'])){
    //On recupere le mot de passe de l'acheteur
    $req = recuperation($pdo, $_POST['username']);
    //On le compare a celui qu'il a entre et on verifie si l'acheteur existe
    if(password_verify($_POST['password'], $req['password'])){
        //On enregistre son pseudo dans la session email et son identifiant dans la session acheteur
        $_SESSION['username'] = $_POST['username'];
        $statusMsg = 'Vous avez bien &eacute;t&eacute; connect&eacute;.';
        header('location:partenaires.php');
    } else {
        $statusMsg = "La combinaison que vous avez entr&eacute; n\'est pas bonne.";
        header('location:signin.php');
    }
}