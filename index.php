<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Bem vindo!</h2>

        <form id="contact-form" action="login.php" method="POST" onsubmit="handleSubmit(event)">
            <div class="form-group">
                <label for="name">Login:</label>
                <input type="text" class="form-control" id="name" name="login" required>
            </div>

            <div class="form-group">
                <label for="name">Senha:</label>
                <input type="password" class="form-control" id="name" name="senha" required>
            </div>

          
            <input type="submit" class="btn btn-primary" name="entrar" value="Entrar"> <br>
        </form>

        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script> 
</body>
</html>