<?php
session_start();
require_once('../config/config.php');

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['naissance']) && isset($_POST['taille']) && isset($_POST['poids'])){
  $nom =htmlspecialchars($_POST['nom']); 
  $prenom =htmlspecialchars($_POST['prenom']);
  $mail =htmlspecialchars($_POST['mail']) ;
  $naissance =htmlspecialchars($_POST['naissance']."-".$_POST['mois']."-".$_POST['jour']) ;
  $taille =htmlspecialchars($_POST['taille']) ;
  $poids =htmlspecialchars( $_POST['poids']);
  $id_docteur = htmlspecialchars($_SESSION['id']);

  $bdd = "SELECT count(*) FROM clients WHERE mail = '" . $mail ."'";
  $execute = mysqli_query($connexion,$bdd);
  $rep = mysqli_fetch_array($execute);
  $count = $rep['count(*)'];
 // var_dump($count); die();
  $mail = strtolower($mail);
  if ($count == '0') {

    $insert = ('INSERT INTO clients(nom, prenom, mail, naissance, taille, poids,id_docteur) VALUES(?,?,?,?,?,?,?)');
       $insert = $connexion->prepare($insert);
       $insert->bind_param("ssssiii",$nom,$prenom,$mail,$naissance,$poids,$taille,$id_docteur);
       $insert->execute();
      header('Location: ../views/docteur.php?success=true');
  }      
                

  


}
?>