<?php
$pdo = new PDO("mysql:host=localhost;dbname=nom_de_ta_base;charset=utf8", "utilisateur", "mot_de_passe");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['nom'],
        $_POST['email'],
        password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT)
    ]);
    echo "Utilisateur ajouté.";
}
?>

<form method="post">
    Nom : <input type="text" name="nom" required><br>
    Email : <input type="email" name="email" required><br>
    Mot de passe : <input type="password" name="mot_de_passe" required><br>
    <button type="submit">Ajouter</button>
</form>
