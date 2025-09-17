
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nom_de_ta_base;charset=utf8", "utilisateur", "mot_de_passe");

$stmt = $pdo->query("SELECT * FROM utilisateurs WHERE age > 25");
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h2>Utilisateurs de plus de 25 ans :</h2>";
foreach ($utilisateurs as $user) {
    echo "Nom : " . htmlspecialchars($user['nom']) . "<br>";
    echo "Email : " . htmlspecialchars($user['email']) . "<br>";
    echo "Âge : " . $user['age'] . "<br><br>";
}
?>
