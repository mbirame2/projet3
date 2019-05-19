<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJOUTPROMO</title>
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
  <h2>AJOUT PROMO</h2>

    <form action="" method="POST">
      <p> 
        <input type="text" name="promo" value="<?php echo $_POST['promo'] ?>" placeholder="Le nom de la promo" size="20" required/>
      </p>
      <p>
       <input type="text" name="dufo" value="<?php echo $_POST['dufo'] ?>" size="20" placeholder="durée formation"required/>
      </p>
      <p>
       
        <input type="number" name="nap" value="<?php echo $_POST['nap'] ?>" placeholder="Une annee"required/>
      </p>
      <p>
        <input type="number" name="copo" value="<?php echo $_POST['copo'] ?>" placeholder="le code de la promotion" required />
      </p>
     
        <input type="submit" value="AJOUTER"  name="ajouter"/>
    </form>
</div>
<?php
if(isset($_POST['ajouter'])){
      $test=false;
   $promo=$_POST['promo'];
   $dufo=$_POST['dufo'];
  
   $nap=$_POST['nap'];
   $copo=$_POST['copo'];
   
  

   $auth=fopen('promo.txt', 'a+');


  $user=$promo.",".$dufo.",".$nap.",".$copo;

  fwrite($auth,$user."\n"); 
    fclose($auth);
    header('location:test.php');
  }

?>
 

          
      </body>
      </html>