<?php
function getAllEtudiants($pdo){
    $stmt = $pdo->prepare("SELECT * FROM etudiant");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();

}
function addEtudiant($pdo,$data){
    $stmt = $pdo ->prepare("INSERT INTO etudiant(num_carte,nom,email,prenom) values(:num_carte,:nom,:email,:prenom)");
    $stmt->bindParam(":num_carte",$data["num_carte"]);
    $stmt->bindParam(":nom",$data["nom"]);
    $stmt->bindParam(":email",$data["email"]);
    $stmt->bindParam(":prenom",$data["prenom"]);
    $stmt->execute();
}