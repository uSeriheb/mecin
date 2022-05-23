<?php
require_once('../config/config.php');
   function patient($b){

        global $connexion;
         $sql = "SELECT * FROM `clients` 
         WHERE `id_docteur` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['id'];
            
            $i++;
        } 
        
        return $t ;
        
    }

    function name($b){

        global $connexion;
         $sql = "SELECT nom FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['nom'];
            
            $i++;
        } 
        
        return $t ;
        
    }    
    function prenom($b){

        global $connexion;
         $sql = "SELECT prenom FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['prenom'];
            
            $i++;
        } 
        
        return $t ;
        
    }    
    function naissance($b){

        global $connexion;
         $sql = "SELECT naissance FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['naissance'];
            
            $i++;
        } 
        
        return $t ;
        
    }    
    function taille($b){
        global $connexion;
         $sql = "SELECT taille FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['taille'];
            
            $i++;
        } 
        
        return $t ;
        
    }   
    
    function poids($b){

        global $connexion;
         $sql = "SELECT poids FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['poids'];
            
            $i++;
        } 
        
        return $t ;
        
    }  

    function mails($b){

        global $connexion;
         $sql = "SELECT mail FROM `clients` 
         WHERE `id` = " .$b. " ";
        $result = $connexion->query($sql);
        $i = 0 ;
        while ($a=$result->fetch_array(MYSQLI_ASSOC)) {
            $t[$i] = $a['mail'];
            
            $i++;
        } 
        
        return $t ;
        
    }    
      
   
      
    

?>