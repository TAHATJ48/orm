<?php
 
try
{
$pdo = new PDO('mysql:host=localhost;dbname=testing3', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare( "INSERT INTO tickets (nom, service, description)
VALUES (:nom, :service, :description)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':service', $service);
$stmt->bindParam(':description', $description);


$nom = $_POST["nom"];
$service = $_POST["service"];
$description = $_POST["description"];
$stmt->execute();

echo 'Data inserted';
}
catch(PDOException $error){
echo $error->getMessage();
}
?>