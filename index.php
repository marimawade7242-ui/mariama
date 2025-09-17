<?php
function direBonjour() {     echo "Bonjour, bienvenue sur mon site !"; 
}  direBonjour(); // Appel 
function nomDeLaFonction() { 
    // Instructions à exécuter 
} 
function afficherMessage() {     echo "Ceci est un message affiché depuis une fonction."; 
}  afficherMessage(); // Appel de la fonction 
function saluer($nom) {     echo "Bonjour, $nom !"; 
}  saluer("Alice"); // Affiche : Bonjour, Alice ! saluer("Bob");   // Affiche : Bonjour, Bob ! 
function additionner($a, $b) {     echo "Le résultat de $a + $b est " . ($a + $b); 
}  additionner(5, 10); // Affiche : Le résultat de 5 + 10 est 15 
 
 
 
function multiplier($x, $y) {     return $x * $y; 
} 
 
$resultat = multiplier(3, 4); echo "Le produit est : " . $resultat; // Affiche : Le produit est : 12 
 
 
 
 
 

 

?>