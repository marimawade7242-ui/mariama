<?php
$personne = ["nom" => "jean" , "age" => 25, "ville" => "Marseille"];
    foreach ($personne as $cle => $valeur){
        echo "$cle : $valeur <br>";
    }
    $notes = [15,12,18,9,14];
    $moyenne = array_sum($notes) / count($notes);
    echo "la moyenne des notes est :" . $moyenne;
    $produits = [
        ["nom" =>  "ordinateur" , "prix" => 800 , "quantité" => 5],
        ["nom" =>  "smartphone" , "prix" => 500 , "quantité" => 10],
        ["nom" =>  "Tablette" , "prix" => 700 , "quantité" => 15],
    ];
    foreach ($produits as $produit){
        echo "produit :" . $produit["nom"] . ", prix :" . $produit["prix"] . "€w,quantité" . $produit["quantité"] . "<br>";
    }
    setcookie("nom","jean", time() + 86400, "/")
    if (isset($_COOKIE["nom"])){
        echo "nom stocké :" . $_COOKIE["nom"];
    }

?>