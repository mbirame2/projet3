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
<?php
echo'<table width=100% class="list">
<thead>
 <tr>
 <th>promo</th>
 <th>date</th>
 <th>Année promo</th>
 <th>code promo</th>
 <tr>
</thead>';




$affiche=fopen('promo.txt','r');
while(!feof($affiche)){
  echo'<tbody>';
echo'<tr>';
$affic=fgets($affiche);
$affi=explode(',',$affic);

for($i=0;$i<4;$i++){
echo'<td>'.$affi[$i].'</td>';
}

echo'</tr>';
echo'</tbody>';
}
fclose($affiche);


echo'</table>'
?>
</body>
</html>