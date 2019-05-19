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
            <a class="nav-link text-uppercase text-expanded" href="modifierapprenant.php">Ajoute Un Produit</a>
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


  <h1 class="list">Voici la liste des apprenants</h1>
 
  <div class="bs-example">
   

<?php
    
   echo' <form id="" action="" method="POST" >';
    echo '<select  name="promotion" >';
    $promo=fopen('promo.txt','r');
    while(!feof($promo)){
      $text =fgets($promo);
      $prom=explode(',',$text);
     echo' <option value="'.$prom[0].'">'.$prom[0].'</option> ';    
    
    }
    fclose($promo);
    echo' <input type="submit" value="voir" id="ajouter" name="ajouter">';
    echo "</select>";
    echo "</form>";
    

   if(isset($_POST['promotion'])){
    echo' <table  width=100% class="list">
    <thead>
     
     <tr>
     <th>prenom</th>
     <th>nom</th>
     <th>datenais</th>
     <th>numero</th>
     <th>email</th>
     <th>statut</th>
     
     </tr>
     </thead>';
    

      $apprenant=fopen('apprenant.txt','r');
      while(!feof($apprenant)){
        $ap =fgets($apprenant);
        $apre=explode(',',$ap);

        
    
    $promo=fopen('promo.txt','r');
    while(!feof($promo)){
      $tex =fgets($promo);
      $pro=explode(',',$tex);
              
           
         if($_POST['promotion']==$pro[0])  { 
          echo'<tbody>';
          echo ' <tr>';      
                    if($pro[3]==$apre[6]){
                      
                   for($i=0;$i<6;$i++){
                          echo '<td>'.$apre[$i].'</td>';
                          
                        }
                       
                    }echo '</tr>';
                    echo'</tbody>';
                    }
                                         
                 
    }fclose($promo); } 
    fclose($apprenant);
  
  
  
  echo'</table>';
}
  
?>


</body>
</html>