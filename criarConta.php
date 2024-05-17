<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }

        .register-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="register-form">
                    <h2 class="mb-4">Criar Conta</h2>
                    <form action="processaCriarConta.php" method="post">
                        <div class="mb-3">
                            <label for="nome_completo" class="form-label">Nome completo:</label>
                            <input type="text" id="nome_completo" name="nome_completo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Endereço de e-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Nome de usuário desejado:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" id="senha" name="senha" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Criar Conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>