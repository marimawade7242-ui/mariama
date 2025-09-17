<form action="bienvenu.php" method="POST">
<label>Nom :</label>
<input type="text" name="nom">
<button type="submit" >Se connecter</button>
</form>
<?php setcookie("langue", "français", time() + 3600, "/"); // 3600 signifie 1h = 3600s
 if (isset($_COOKIE['langue'])) // lire un cookie
  {     echo "Langue sélectionnée : " . $_COOKIE['langue']; 
} 
?> 

