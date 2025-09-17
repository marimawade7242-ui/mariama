<?php
for ($i =2; $i <=10; $i+=2){
    echo "$i est paire <br>";
}
for ($i =1; $i<=5; $i++){
    if ($i==3) {
        break;
    }
    echo "$i <br>";
}
$nombre=10;
if ($nombre>0){
    echo "le nombre est positif <br>";
}
elseif($nombre=0)
{
    echo "le nombre est null <br>";
}
else{
    echo "le nombre est négatif <br>";
}
$nombre = 5;
for ($i=1;$i<=10;$i++){
    echo "5 x $i=".($i*5)."<br>";
}
// Afficher leur nom et leur note
$etudiants =[
    "Alice" => 15,
    "Bob" => 12,
    "Charlie" => 15,
];
foreach ($etudiants as $nom =>$note){
    echo "$nom a obtenu $note/20 .<br>";
} 
$couleurs = ["Rouge", "Vert", "Bleu"]; foreach ($couleurs as $couleur) {     echo "$couleur <br>"; 
} 
$personne = ["nom" => "Alice", "âge" => 25, "ville" => "Dakar"]; foreach ($personne as $cle => $valeur)
 {     echo "$cle : $valeur <br>"; 
}
for ($i = 1; $i <= 5; $i++) {     if ($i == 3) {         break; 
}     echo "$i <br>"; 
} 
for ($i = 1; $i <= 5; $i++) {     if ($i == 3) {         continue; 
    }     echo "$i <br>"; 
} 
$etudiants = [ 
    "Alice" => 15, 
    "Bob" => 12, 
    "Charlie" => 18 
];  
foreach ($etudiants as $nom => $note) {     echo "$nom a obtenu $note/20. <br>"; 
} 







?>