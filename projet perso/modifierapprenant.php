<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>liste-produit</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .list{
    text-align: center;
    margin-top:20px;
}
</style>

</head>
<body>

<nav width=100% class="navbar navbar-expand-lg navbar-dark py-lg-4 py-2 bg-dark">
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
            <a class="nav-link text-uppercase text-expanded" href="modifierapprenant.php">Modifier apprenant</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="test.php">Lister les apprenants</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="ajoutpromo.php">Ajouter une promotion</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="modifierpromo.php">Modifier une promo</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="modifierapprenant.php">Modifier un apprenant</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="affichepromo.php">Afficher une promotion</a>
          </li>
        </ul>
     
  </nav>

  <h1 class="list">Saisissez les champs que vous voulez modifier </h1>


  <div class="container" >
	<div class="d-flex justify-content-center h-10">
		<div class="card" id="mj" >
			
			<div class="card-body" >
				<form action="" method="POST" >
            <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Prenom:</span>
                </div>
                    <input type="text" class="form-control" name="nom"  placeholder=""  value="<?php echo $_POST['nom'] ?>" required/>
                <div class="input-group-prepend">
                  <span class="input-group-text">Nom  </span>
                </div>
                    <input type="text" class="form-control" name="pu" placeholder="" value="<?php echo $_POST['pu'] ?>"  />
                <div class="input-group-prepend">  
                    <span class="input-group-text">Date de naissance:  </span>
                </div>
                    <input type="number" class="form-control" name="le" placeholder="'" value="<?php echo $_POST['le'] ?>"  />
                <div class="input-group-prepend">
                  <span class="input-group-text">Numero de telephone:</span>
                </div>
                    <input type="number" class="form-control" name="nt" placeholder="" value="<?php echo $_POST['nt'] ?>" />

                    <div class="input-group-prepend">
                  <span class="input-group-text">Email:</span>
                </div>
                    <input type="text" class="form-control" name="em" placeholder="" value="<?php echo $_POST['em'] ?>" />
            
                    <div class="input-group-prepend">
                  <span class="input-group-text">Statut:</span>
                </div>
                    <input type="text" class="form-control" name="st" placeholder="" value="<?php echo $_POST['st'] ?>" />

                    <div class="input-group-prepend">
                  <span class="input-group-text">Code de promo:</span>
                </div>
                    <input type="number" class="form-control" name="co" placeholder="" value="<?php echo $_POST['co'] ?>" />


              <div class="form-group">
					        	<input type="submit" value="Modifier" class=" float-right " name="modifier">
					    </div>
				</form>
			</div>
		</div>
	</div>
</div>



 
 
              <?php

               
                $nom=$_POST["nom"];
              $pu=$_POST["pu"];
             $le=$_POST["le"];
              $nt=$_POST["nt"];
              $em=$_POST["em"];
              $st=$_POST["st"];
              $co=$_POST["co"];
              //if(isset($_POST["modifier"])){

                if(isset($_POST['nom'])){
                  
                $file=fopen("apprenant.txt","r");
                while(!feof($file)){
                
                  $ligne=fgets($file);
                  $tab=explode(",",$ligne);
                    if($nom==$tab[0]){
                      $tab[1]=$pu;
                      $tab[3]=$nt;
                      $tab[2]=$le;
                      $tab[4]=$em;
                      $tab[5]=$st;
                      $tab[6]=$co;
                      $efface=$tab[0].",". $tab[1].",". $tab[2].",". $tab[3].",". $tab[4].",". $tab[5].",". $tab[6]."\n";
                    }
                    else{
                      $efface=$ligne;
                    }
                    $newligne=$newligne.$efface;
                  }
                  fclose($file);
              
                  $file=fopen("apprenant.txt","w+");
                  fwrite($file,$newligne);
                  fclose($file);
                  header('location:test.php') ; 
                }

              
                    
                  

?>

<footer class=" footerbar footerbar-expand-lg py-2 bg-dark footer-dark py-lg-0 ">

<div class="container">
   <p class="m-0 text-center text-white">Copyright &copy; SA Entreprise 2019</p>
</div>
</footer>
</body>
</html>