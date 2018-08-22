<?php 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<meta charset="utf-8">
	<title> </title>
</head>
<body>



    <center>  <h4>  AJOUTE TON CANARD</h4> </center>

        
        <table  class="striped" class="responsive-table">
        
            <tr>
          
              <th>ou</th>
              <th>quand</th>
              <th>commentaires</th>

            </tr>

    <?php
    
    
    $bdd = new PDO('mysql:host=localhost;dbname=canard;charset=utf8', 'dania','0000');
    $reponse = $bdd->query("SELECT * FROM form");
    while($donnees = $reponse -> fetch())
    echo
    '<tr>
      <td>'.  $donnees['ou'].'</td>
      <td>'.  $donnees['quand'].'</td>
      <td>'.  $donnees['commentaires'].'</td>
    </tr>';
    
    ?>
</table> 


</body>
</html>

