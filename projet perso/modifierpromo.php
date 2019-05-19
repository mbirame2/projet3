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

  <div class="container" >
	<div class="d-flex justify-content-center h-10">
		<div class="card" id="mj" >
			
			<div class="card-body" >
				<form action="" method="POST" >
            <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">La promotion:</span>
                </div>
                    <input type="text" class="form-control" name="nom"  placeholder="donnez le numero du promo"  value="<?php echo $_POST['nom'] ?>" required/>
                <div class="input-group-prepend">
                  <span class="input-group-text">La date:  </span>
                </div>
                    <input type="text" class="form-control" name="pu" placeholder="Donnez la date" value="<?php echo $_POST['pu'] ?>"  />
                <div class="input-group-prepend">  
                    <span class="input-group-text">L'année de la promotion:  </span>
                </div>
                    <input type="text" class="form-control" name="le" placeholder="Année de la promotion'" value="<?php echo $_POST['le'] ?>"  />
                <div class="input-group-prepend">
                  <span class="input-group-text">Le code promo:</span>
                </div>
                    <input type="text" class="form-control" name="quantite" placeholder="Donnez le code de la promo" value="<?php echo $_POST['quantite'] ?>" />

            </div>
              <div class="form-group">
					        	<input type="submit" value="Modifier" class=" float-right " name="modifier">
					    </div>
				</form>
			</div>
		</div>
	</div>
</div>



 
 <?php 
// if(isset($_POST['modifier'])){



?>
 <h1 class="list">Voici la liste de nos produit apres modification </h1>
 
 <div class="bs-example">
    <table class="list" width=100%>
        <thead>
                      
                      <tr>
                      <th>numero promo</th>
                      <th>date</th>
                      <th>Année promo</th>
                      <th>code promo</th>
                      </tr>
</thead>

              <?php


                $le=$_POST["le"];
              $nvnom=$_POST["nom"];
              $nvpu=$_POST["pu"];
              $nvqu=$_POST["quantite"];
              //if(isset($_POST["modifier"])){

                if(isset($_POST['nom'])){
                  $nvnom=$_POST['nom'];
                $file=fopen("promo.txt","r");
                while(!feof($file)){
                
                  $ligne=fgets($file);
                  $tab=explode(",",$ligne);
                    if($nvnom==$tab[0]){
                      $tab[1]=$nvpu;
                      $tab[3]=$nvqu;
                      $tab[2]=$le;
                      $efface=$tab[0].",". $tab[1].",". $tab[2].",". $tab[3]."\n";
                    }
                    else{
                      $efface=$ligne;
                    }
                    $newligne=$newligne.$efface;
                  }
                  fclose($file);
              
                  $file=fopen("promo.txt","w+");
                  fwrite($file,$newligne);
                  fclose($file);
                }

              $file=fopen("promo.txt","a+");
              while(!feof($file)){

                $ligne=fgets($file);
                $tab=explode(",",$ligne);
                echo" <tbody>";
                echo "<tr>";
                
              for($i=0;$i<count($tab); $i++){
              //  $tab[3]=$tab[1]*$tab[2];
               
                      echo "<td>".$tab[$i]."</td>";
                    
                  
                      
                    }
                    echo "</tr>";
                    echo" </tbody>";

                } 
                  
                  fclose($file);


?>
</table>
<footer class=" footerbar footerbar-expand-lg py-2 bg-dark footer-dark py-lg-0 ">

<div class="container">
   <p class="m-0 text-center text-white">Copyright &copy; SA Entreprise 2019</p>
</div>
</footer>
</body>
</html>