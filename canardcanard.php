<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 

	<title> COIN COIN  </title>
</head>
<body>

<center>  <h1>  AJOUTE TON CANARD    </h1> </center> </br> </br>


 <center> <form  method="post" > 
<div id="canard"> 
<tr>
   
    <legend id="atuvu">  A TU VU UN CANARD AUJOURD-HUI ?     </legend>
   <p>
      <input type="radio" name="size" id="size_1" value="small" name="titre">
      <label for="size_1">OUI</label>
    </p>
    <p>
      <input type="radio" name="size" id="size_2" value="medium" name="titre">
      <label for="size_2">NON</label>
    </p>
     <span id="ou"> OU  </span>
        <strong><abbr title="required">*</abbr></strong>
      </label>
      <input type="text" id="titre" name="ou">
 
    </p>

    <p>
      <label for="pwd">
        <span id="quand">  QUAND :  </span>
        <strong><abbr title="required">*</abbr></strong>
        <input type="text"  name="quand">
      </label>
     
     </br> </br>
      <label for="pwd"> 
        <span id="commentaires">  COMMENTAIRES : </span>  </br>
        <strong><abbr title="required">*</abbr></strong> </br>
        <input size ="39" type="text" id="com" name="commentaires">
        </br>
      </label> 
       <button>  ENVOYER VERS .. </button> 
       <a href=" canard.php"> <mark> VOIR LE FORMULAIRE :) </mark> </a>


  </tr>
</form>
</div>
</center>

<?php

     /*
        Enregistrer le nouveau post
     */

       $ou=$_POST['ou'];
       $quand=$_POST['quand'];
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
          INSERT INTO form ( ou,quand,commentaires ) 
          VALUES( :ou, :quand, :commentaires );
        ');


       $req->execute(array(
        ':ou' => $ou,
        ':quand' => $quand,
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
<!-- <?php
   
      
      }

?> -->

</body>
</html>