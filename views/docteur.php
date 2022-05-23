
<?php
require_once('../config/config.php');
require_once('../controller/liste.php');
//require_once('../controller/traitement_connexion.php');
if (isset($_GET['success'])) {
    $succ = htmlspecialchars($_GET['success']);
    //var_dump($succ); die();
    switch ($succ) {
      case 'true':
        ?>
        <style>
          .btn{
            position: relative;
          }
        </style>
        <div class="alert alert-success" role="alert">
            Bienvenue Docteur !
            <a href="" type="button" class="btn btn-warning btn-sm  ">Deconnexion</a>
 
       </div>
         
         <?php
        break;
      
      default:
        # code...
        break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
</head>
<body>
<table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Nom</th>
         <th scope="col">prenom</th>
         <th scope="col">mail</th>
         <th scope="col">date de naissance</th>
         <th scope="col">taille</th>
         <th scope="col">poids</th>
         <th scope="col">IMC</th>
         
         
       </tr>
     </thead>
     <tbody>
       
       <?php $t = patient(1)  ?>
     <?php foreach ($t as $key => $value): ?>
            
      <tr>
       <th scope="row"></th>
       <td> <?php echo name($value)[0]   ?>  </td>
       <td>  <?php echo prenom($value)[0]  ?>  </td>
       <td>  <?php echo mails($value)[0]   ?>  </td>]
       <td>  <?php echo naissance($value)[0]  ?> </td>
       <td id="taille">  <?php echo taille($value)[0]   ?> </td>
       <td id="poids"> <?php echo poids($value)[0] ?>  </td>
       <td id="imc"></td>
       </tr>
    
   <?php endforeach ?>
    
    
   <script src="../js/calcul.js"></script>
</body>
</html>