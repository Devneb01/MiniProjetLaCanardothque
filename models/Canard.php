<?php
function getAllCanards($pdo){
    $stmt = $pdo->prepare("SELECT*FROM canard");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function addCanard($pdo,$data){
    $stmt =$pdo->prepare("INSERT INTO canard( nom, type, etat) values(:nom, :type, :etat)");
    $stmt->bindParam(':nom', $data['nom']);
    $stmt->bindParam(':type', $data['type']);
    $stmt->bindParam(':etat', $data['etat']);
    $stmt->execute();

}