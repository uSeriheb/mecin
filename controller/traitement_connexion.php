<?php
require_once('../config/config.php');
session_start();
if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);

    if ($mail !=="" && $mdp !=="") {
        $requet = "SELECT count(*) FROM docteur
        WHERE mail ='".$mail."' and mdp = '". $mdp ."' ";
        $exec = mysqli_query($connexion, $requet);
        $reponse = mysqli_fetch_array($exec);
        $count = $reponse['count(*)'];
       
        if($count != 0){
            $requet2 = "SELECT `id`,`nom`,`prenom`, `mail`, `mdp`,`docteur`
            FROM docteur 
            WHERE mail = '". $mail ."'  ";
            $deux = mysqli_query($connexion, $requet2);
            $repond = mysqli_fetch_array($deux);
            $id = $repond['id'];
            $mail = $repond['mail'];
            $mdp = $repond['mdp'];
            $nom = $repond['nom'];
            $prenom = $repond['prenom'];
            $docteur = $repond['docteur'];

           // var_dump($repond); die();
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $id;
            $docteur = $_SESSION['docteur'];
            

            header('Location: ../views/docteur.php?success=true');
            die();
        }else{
            header('Location: ../controller/traitement_connexion.php?erreur=1');
        }
    } header('Location: ../controller/traitement_connexion?erreur=2');
}else{
    header('Location: ../views/index.php');
}
?>