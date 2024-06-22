<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="login-container">

        <div class="imagem">
            <img src="../home/imagens/Coração.png" alt="">
        </div>

        <h2 class="text-center">Login</h2>

        <form action="login.php" method="POST">

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #289548; border: none;">Entrar</button>
            
        </form>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
            if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                header("Location: ../home_log/home_log.php");
                exit();
            } else {
                echo "O e-mail inserido não é válido.";
            }
        }

        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>