<?php 
/*$conn = mysqli_connect("localhost", "root", "", "gestion_users"); 
 if (!$conn) {     die("Échec de connexion : " . mysqli_connect_error()); 
} echo "Connexion réussie !"; 
  
 try { 
    $pdo = new PDO("mysql:host=localhost;dbname=gestion_users", "root", ""); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     echo "Connexion réussie !"; } catch (PDOException $e) {     die("Erreur : " . $e->getMessage()); 
} 

$conn = mysqli_connect("localhost", "root", "", "gestion_users");  
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('Alice', 
'alice@mail.com', '12345')"; if (mysqli_query($conn, $sql)) {     echo "Utilisateur ajouté !"; 
} else {     echo "Erreur : " . mysqli_error($conn); 
} 

$pdo = new PDO("mysql:host=localhost;dbname=gestion_users", "root", "");  
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mdp)"; 
$stmt = $pdo->prepare($sql); 
$stmt->execute([ 
    'nom' => 'Mariama', 
    'email' => 'mariama@mail.com', 
    'mdp' => password_hash('12345', PASSWORD_DEFAULT) 
]);  echo "Utilisateur ajouté !"; 

$conn = mysqli_connect("localhost", "root", "", "gestion_users");  
$sql = "SELECT * FROM utilisateurs"; 
$result = mysqli_query($conn, $sql); 
 
while ($row = mysqli_fetch_assoc($result)) {     echo "ID: " . $row['id'] . " - Nom: " . $row['nom'] . " - Email: " . 
$row['email'] . "<br>"; 
}*/
$pdo = new PDO("mysql:host=localhost;dbname=gestion_users", "root", "");  
$sql = "SELECT * FROM utilisateurs"; 
$stmt = $pdo->query($sql); 
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     echo "ID: {$row['id']} - Nom: {$row['nom']} - Email: {$row['email']}<br>"; 
} 

// $conn = mysqli_connect(hostname:"localhost", username:"root",password: "", database:"gestion_users");  
// $sql = "UPDATE utilisateurs SET email = 'alice_new@mail.com' WHERE id = 1"; 
// mysqli_query($conn, $sql);



?> 


<SCript></SCript>