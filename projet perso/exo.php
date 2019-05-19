<?php
echo '<form method="post" action=" ">';
echo'<select name="monSelect">';
for($i=0;$i<=5;$i++)
    echo '<option value="v_'.$i.'">Valeur_'.$i.'</option>';
echo '<input type="submit" value="valider">';
echo'</select></form>';

if(isset($_POST['monSelect']))
    echo $_POST['monSelect'];
?>