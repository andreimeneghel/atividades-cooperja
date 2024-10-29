<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$student = new Student(null,
    "DEDII GOD Dias",
    new \DateTimeImmutable('2004-12-03'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name',$student->name());
$statement->bindValue('birth_date',$student->birthDate()->format('Y-m-d'));
if ($statement->execute()){
    echo "Inserido com sucesso!";
}