<?php
echo "je me nomme Mariama WADE et j'ai 22ans.<br>";
$nom = "Mariama"; // variable de type chaine
$age = "22"; // variable de type entier
$prix = "10.5"; // variable de type flottant
// on peut écrire les variables comme:
// $_ ou $a-z
// pas de espace ni de caractére spéciaux sauf (_) Ex: $_monAge
// sensible à la casse Ex: $nom != $Nom !=$NOM !=$mOM
$a = 10;
$b = 9;
echo "a=10,b=9 <br>";
$addition = $a+$b;
$soustraction = $a-$b;
$multiplication = $a*$b;
$division = $a/$b;
$modulo = $a%$b;
echo "la somme de a et b est de:$addition <br>";
echo "la soustraction de a et b est de:$soustraction<br>";
echo "la multiplication de a et b est de:$multiplication<br>";
echo "la division de a et b est de:$division<br>";
echo "le modulo de a et b est de:$modulo<br>";

$notes=[0,1,2,3,4,5,6,7,8,9];
echo "5éme note est =". $notes[4]." <br>"; 
echo "6éme note est =". $notes[5]. "<br>";
echo "7éme note  est=". $notes[6]. "<br>";
echo "8éme note est=". $notes[7]. "<br>";
echo "9éme note est =". $notes[8]. "<br>";
echo "10éme note est =". $notes[9]. "<br>";
$age=20;
if ($age<18){
    echo"vous etes mineur!";
}
elseif($age>=18 && $age<60)
{
    echo"vous etes adulte!"."<br>";  
}
else{
    echo"vous etes senior!";
     
}
$jour = "Mardi";
switch ($jour){
    case "lundi";
    echo "Debut de la semaine";
    break;
    case "Dimanche";
    echo"c'est le weekend";
    break;
    default;
    echo"Un jour comme les autres!";
}
?>
