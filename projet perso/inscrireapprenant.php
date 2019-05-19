<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSCRIREAPPRENANT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4 py-2 bg-dark">
<ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="inscrireapprenant.php">Inscrire apprenant
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="exclure.php">Exclure apprenant</a>
          </li>
          
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="test.php">Lister les apprenants</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="modifierapprenant.php">Modifier un apprenant</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="ajoutpromo.php">Ajouter une promotion</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="modifierpromo.php">Modifier une promo</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="affichepromo.php">Afficher une promotion</a>
          </li>
        </ul>
     
  </nav>
 
<div class="form">
  <h2>AJOUT APPRENANT</h2>

    <form action="inscrireapprenant.php" method="POST">
      <p> 
        <input type="text" name="prenom" value="<?php echo $_POST['prenom'] ?>" placeholder="prenom" size="20" required/>
      </p>
      <p>
       <input type="text" name="nom" value="<?php echo $_POST['nom'] ?>" size="20" placeholder="nom"required/>
      </p>
      <p>
       
        <input type="text" name="datenais" value="<?php echo $_POST['datenais'] ?>" placeholder="date Naissance"required/>
      </p>
      <p>
        <input type="number" name="number" value="<?php echo $_POST['number'] ?>" placeholder="Numero Telephone" required />
      </p>
      <p>
        <input type="text" name="email" value="<?php echo $_POST['email'] ?>" placeholder="email"  required />
      </p>
      <p>
        <input type="text" name="statut" value="<?php echo $_POST['statut'] ?>" placeholder="statut"  required />
      </p>
     
      <p>
        <input type="text" name="codepromo" value="<?php echo $_POST['codepromo'] ?>" placeholder="Codepromo"  required />
      </p>

        <input type="submit" value="AJOUTER"  name="ajouter"/>
    </form>
</div>
<?php
if(isset($_POST['ajouter'])){
      $test=false;
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $datenais=$_POST['datenais'];
   $number=$_POST['number'];
   $email=$_POST['email'];
   $statut=$_POST['statut'];
   $codepromo=$_POST['codepromo'];
  //$promo=$_POST['promo'];
  if($statut!="present" && $statut!="abandon" && $statut!="exclu"){
echo'veillez choisir comme statut present , exclu ou abandon ';
  }else{

   $auth=fopen('apprenant.txt', 'a+');


  $user=$nom.",".$prenom.",".$datenais.",".$number.",".$email.",".$statut.",".$codepromo;

  fwrite($auth,$user."\n"); 
    fclose($auth);
    header('location:test.php');
  }
}
?>
 

          
      </body>
      </html>