<?php
$pdo = new PDO("mysql:host=localhost;dbname=nom_de_ta_base;charset=utf8", "utilisateur", "mot_de_passe");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE utilisateurs SET email = ? WHERE id = ?");
    $stmt->execute([$_POST['nouvel_email'], $_POST['id']]);
    echo "Email mis à jour.";
}
?>

<form method="post">
    ID utilisateur : <input type="number" name="id" required><br>
    Nouvel email : <input type="email" name="nouvel_email" required><br>
    <button type="submit">Modifier</button>
</form>
