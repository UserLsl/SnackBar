<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackBar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php

        //Carrega os arquivos
        // require 'config.php';
        require_once 'model/LoginModel.php';
        require_once 'view/LoginView.php';
        require_once 'controller/LoginController.php';

        $pdo = new PDO("mysql:host=localhost;dbname=snackbar", "root", "");

        //Instanciar objetos
        $dao = new LoginDAO($pdo);
        $model = new LoginModel();
        $view = new LoginView();
        $controller = new LoginController($model, $view, $dao);

        //Verificar se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //Chama o controller para passar as 3 variáveis
            $controller->logar($email, $senha);
        } else {
            $view->mostrarFormulario();
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>