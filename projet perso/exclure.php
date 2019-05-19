<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>liste-utilisateur</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="tut.css">
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .form-dark{
      height:45px ;
    width:24% ;
    margin:auto;
    background-color: black;

    }
    .listpro{
      color:white;
    }
    .listsub{
      margin-left: 255px;
    }

</style>

</head>
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
<body>
<div class="container">
	<div class="d-flex justify-content-center h-10">
		<div class="card" id="mj">
			<div class="card-header" id="form">
				<h3 >Exclure un candidat:</h3>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">exclure</span>
						</div>
						<input type="text" class="form-control" placeholder="nom" name="nom" required/>
						
                    </div>
					<div class="form-group">
						<input type="submit" value="Exclure"  name="exclure">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


  <h1 class="list">Voici la liste des apprenants</h1>
 
  <div class="bs-example">
    <table class="table table-striped table-dark">
        <thead>
         
         <tr>
         <th>prenom</th>
         <th>nom</th>
         <th>datenais</th>
         <th>numero</th>
         <th>email</th>
         <th>statut</th>
         <th>codepromo</th>
         </tr>
         </thead>
  
 
 
 <?php 
  if(isset($_POST['exclure'])){
    $nom=$_POST['nom'];
  $file=fopen("apprenant.txt","r");
  while(!feof($file)){
  
    $ligne=fgets($file);
    $tab=explode(",",$ligne);

      if($nom==$tab[0]){
        $efface="";
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
  }

  $file=fopen("apprenant.txt","r");
  while(!feof($file)){
  $ligne=fgets($file);
    $tab=explode(",",$ligne);
    if($tab[0]!='exclu'){
        
    echo" <tbody>";
    echo "<tr>";

  for($i=0;$i<count($tab); $i++){

   
          echo "<td>".$tab[$i]."</td>";
         
      
          
        }
        echo "</tr>";
        echo" </tbody>";

    }
      }  
      fclose($file);
  

?>
</table>

</body>
</html>