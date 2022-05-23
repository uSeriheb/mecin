<?php
if (isset($_GET['reg_err'])) {
  $err = htmlspecialchars($_GET['reg_err']);
  switch ($err) {
    case 'success':
      ?>
      <div class="alert alert-primary" role="alert">
          Rendez-vous bien enregistre
     </div>
       
       <?php
      break;
    
    default :
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
    <link rel="stylesheet" href="style.css">
    <title>Rendez-Vous</title>
</head>
<body>

    </style>
<form action="../controller/traitement.php" method="POST" id="inscription">
  <div class="main-w3layouts wrapper">
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form action="../controller/traitement.php" method="POST" id="inscription">
        <input class="text" type="text" name="nom" value="" placeholder="First Name" id="nom" required="">
        <input class="text" type="text" name="prenom" value="" placeholder="Last Name" id="prenom" required="">
        <input class="text email" type="email" name="mail" value="" placeholder="Email" id="mail" required="">
        
        <select class="text " type="date" name="naissance" value="" placeholder="" id="annee" required="">
        <option value='0' class="annee">Année</option>
              </select>
             <select name='mois' class="anne" id='mois'>
            <option value='0' class="annee">Mois</option>
            </select>
            <select name='jour' id='jour'>
            <option value='0'>Jour</option>
           </select>


        <input class="text" type="text" name="taille"  value="" placeholder="Your size" required="">
        <input class="text" type="text" name="poids"  value="" placeholder=" Your Weight" required="">
         <p style="color: red ;" id="error"></p>
        
        <div class="wthree-text">
          <label class="anim">
            <input type="checkbox" class="checkbox" required="">
            <span>I Agree To The Terms & Conditions</span>
          </label>
          <div class="clear"> </div>
        </div>
        <input type="submit"value="SIGNUP">
      </form>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2022 Dr.Werfeli . All rights reserved | Design by werfeli iheb </p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    </form>
    <script src="../js/script.js"></script>
</body>
</html>