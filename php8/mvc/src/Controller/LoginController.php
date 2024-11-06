<?php

namespace Alura\Mvc\Controller;
use Alura\Mvc\Helper\FlashMessageTrait;
use PDO;

class LoginController implements Controller
{

    use FlashMessageTrait;
    public function __construct()
    {
        require '../connection/conexao-bd.php';
        $this->pdo = $pdo; // Define a propriedade $pdo usando a conexão importada

    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $sql = 'SELECT * FROM users WHERE email = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();

        $userData = $statement->fetch(PDO::FETCH_ASSOC);
        $correctPassword = password_verify($password, $userData['password'] ?? '');
        if(password_needs_rehash($userData['password'], PASSWORD_ARGON2ID)){
            $this->pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $userData['id']]);
            $statement->bindValue(1, password_hash($password, PASSWORD_ARGON2ID));
            $statement->bindValue(2, $userData['id']);
            $statement->execute();
        }
        if($correctPassword){
            $_SESSION['logado'] = true;
            header('Location: /');
        }else{
            $this->addErrorMessage("Usuario ou senha invalidos");
            header('Location: ../login?sucesso=0');
        }
    }

}