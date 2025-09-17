<?php if (!empty($_POST['nom'])) {     
    echo "Bienvenue, " . htmlspecialchars($_POST['nom']) . "!"; 
} else {     echo "Veuillez entrer un nom."; } 
?> 

 
