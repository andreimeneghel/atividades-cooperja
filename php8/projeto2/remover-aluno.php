<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$sqlDelete = 'DELETE FROM students WHERE id = ?';
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(1,5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());