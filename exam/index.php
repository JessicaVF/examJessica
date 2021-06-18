<?php 

require "courses/logique.php";
?>




<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <?php  
    foreach($courses as $course){
      if($isForEdit){
      ?>
      <form method="POST">
          <input type="hidden" name="course_id" value=<?php echo $course['id']?>>
          <input type="hidden" name="edit" value="edit">
          <input type="text" name="description_edit" placeholder= <?php echo $course['description']?>>
          <input type="submit" value="Edit"> 
      </form>
      <?php } ?>
      <p><?php echo $course['description']; ?></p>
      <form method="POST">
        <input type="hidden" name="edit" value="editStart">
        <input type="submit" value="Edit">
      </form> 




      <?php if($course['deja_achete']){
        $class = "dejaAchete";
        $value = "Acheté";
      }
      else{
        $class = "pasEncoreAchete";
        $value = "A acheter";
      }
      ?>
      <form method="POST">
          <input type="hidden" name="course_id" value=<?php echo $course['id']?>>
          <input type="hidden" name="deja_achete" value=<?php echo $course['deja_achete']?>>
          <input class = "<?php echo $class?>" type="submit" value="<?php echo $value?>"> 
      </form>
        
      
      <form method="POST">
          <input type="hidden" name="course_id" value=<?php echo $course['id']?>>
          <input type="hidden" name="delete" value="delete">
          <input type="submit" value="supprimer"> 
      </form>

      
      <?php } ?>
      <br>
      <form method="POST">
        <input type="text" name="description" placeholder="Description">
        <input type="hidden" name="create" value="create">
        <input type="submit" value="Add course"> 
      <form>
      



























   
 <span>Ma navbar ici</span>                       
 <hr>
<span>Bonjour Luc</span>
<br><br><br><br>

      <div class="lesCourses">

        <div class="uneCourse">
            <strong>Une Bouteille d'huile</strong> <button class="dejaAchete">Acheté</button> <button>Editer</button> <button>Supprimer</button>
        </div>

        <div class="uneCourse">
            <strong>Du Papier Toilette</strong> <button class="pasEncoreAchete">A acheter</button> <button>Editer</button> <button>Supprimer</button>
        </div>

        <div class="uneCourse">
            <strong>Deux éponges</strong> <button class="dejaAchete">Acheté</button> <button>Editer</button> <button>Supprimer</button>
        </div>

        <div class="uneCourse">
            <strong>Des raviolis</strong> <button class="pasEncoreAchete">A acheter</button> <button>Editer</button> <button>Supprimer</button>
        </div>

      </div>

<br><br><br><br>
  <div class="nouvelleCourse">
  
      <input type="text" placeholder="Nouveau truc à ajouter à la liste">
      <button>Ajouter</button>
  
  
  </div>

  <br><br>
  <p>on veut pouvoir cliquer pour changer le booleen dejaAchete, et ainsi recharger la page et que le bouton prenne la bonne couleur</p>
  <p>on veut cliquer pour supprimer et recharger la page egalement</p>
  <p>on veut editer uniquement la description lorsque l'on clique sur Editer : le nom devient alors un formulaire avec un echo dans la value</p>
  <p>pour déclencher le mode edition : on envoie dans POST l'id de la course, et la prochaine fois que l'on l'affiche, cette derniere sera en mode Edition si son ID est le même que retrouvé dans POST</p>
  <p>il y aura donc une condition pertinente dans le foreach, qui decidra pour chaque course d'un affichage normal ou en mode edition</p>

  <br><br>




  <p>Les requis, obligatoire : </p>
  <ul>
    <li>utiliser PDO</li>
    <li>utiliser bootstrap</li>
    <li>une course par ligne, utiliser soit une table, soit une liste, soit des rows</li>
    <li>la structure de la base de données est à respecter</li>
  </ul>
  <h2>1. Réaliser le projet SANS gestion d'utilisateurs</h2>
  <p>imagine que cette version ne sera utilisée que par une seule personne. La database :</p>
<img src="db.png" alt="">

<p><strong>travailler strictement dans cet ordre </strong>: afficher, supprimer, créer, et <strong>EN DERNIER</strong>, éditer</p>




  <h2>2. Uniquement quand tout marche en 1., s'intérésser au dossier authentification et à la gestion des utilisateurs</h2>
  <p>il faudra commencer sans encryption et sans salt, avec des users et passwords créés directement dans phpmyadmin </p>
  <p>l'idée sera qu'il y ait une liste de courses par utilisateur (donc une colonne user_id dans la table courses)</p>
<p>la database dans cette version-la :</p>
  <img src="db2.png" alt="">

  <h2>3.Uniquement si tout ce qui est dit avant est fonctionnel, créer un module d'inscription (signup.php) dans /authentification</h2>
      <p>c'est la partie bonus/facultative. essentiellement cela doit fonctionner sans utilisateurs, ensuite avec une connexion sur des comptes crées directement via phpmyadmin non-cryptés </p>
      <p>UNIQUEMENT APRES CES DEUX ETAPES FONCTIONNELLES  un module d'inscription et cryptage des mots de passe</p>
</body>
</html>