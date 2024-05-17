<!DOCTYPE html>
<html lang="por">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="/includ/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            font-weight: bold;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .login-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .login-btn:hover {
            background-color: #0056b3;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 50px); /* Altura da tela menos a altura da barra de navegação */
        }
        .content {
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 3em;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Barra de navegação -->
    <div class="navbar">
        <a href="#" class="navbar-brand">BragaCode</a>
        <div>
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Serviços</a>
            <a href="#">Contato</a>
            <a href="login.php" class="login-btn">Fazer Login</a>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h1>Bem-vindo ao Meu Site</h1>
            <p>Explore meus serviços e descubra o que podemos oferecer.</p>
            <a href="#" class="btn">Começar</a>
        </div>
    </div>

    


</body>
</html>


<script></script>