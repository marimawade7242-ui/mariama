<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestion_users", "root", "");  
$sql = "SELECT * FROM utilisateurs"; 
$stmt = $pdo->query($sql); 
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     echo "ID: {$row['id']} - Nom: {$row['nom']} - Email: {$row['email']}<br>"; 
} 
?>
