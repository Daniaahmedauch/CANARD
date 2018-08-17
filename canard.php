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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> LES AJOUTS DE CANARD </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">  TOUT SUR LES CANARD </a></li>
      <li><a href="#"> LE TABLEAU </a></li>
      <li><a href="#">FACEBOOK </a></li>
    </ul>
  </div>
</nav>


      <table>
        <thead>
          <tr>
              <th> OU </th>
              <th>QUAND</th>
              <th>COMMENTAIRES</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>QUAND </td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>COMMENTAIRES</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          </tr>
        </tbody>
      </table>
            

<?php

	   /*
	   		Enregistrer le nouveau post
	   */

       $titre=$_POST['titre'];
       $contenus=$_POST['contenus'];
       $commentaires=$_POST['commentaires'];
       

         // on se connecte à mysql :

         
        try 
       {  

           $bdd = new PDO( 'mysql:host=localhost;dbname=canard;charset=utf8','dania','0000');
         
       }

          // en cas d'erreur on affiche un message :

        
        catch (Exception $e)
        {   
           die('Erreur : ' . $e->getMessage());
      
        }

       $req = $bdd->prepare('
       		INSERT INTO form ( titre,contenus,commentaires ) 
       		VALUES( :titre, :contenus, :commentaires );
       	');

       $req->execute(array(
	    	':titre' => $titre,
	    	':contenus' => $contenus,
       		':commentaires' => $commentaires
       		
       ));





   	   /*

   	   		Afficher la page
   	   	*/

       $reponse = $bdd->query('SELECT * FROM form');
       while($donnees=$reponse->fetch())

	 {

?>

		<!--  affichage des données -->
<?php
			echo '<p> ' . $donnees ['titre'] .  ' </p> '; 
			echo '<p>'  . $donnees['contenus'] .'</p>';
			echo '<p>'  . $donnees['commentaires'] .'</p>';
			
      }

?>

<?php 

      echo '<tr><td>'OU: . $donnees ['']

?>
	


</body>
</html>

