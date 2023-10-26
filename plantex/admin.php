<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
        }

        button.admin-button {
            background-color: #dc3545;
        }

        button.admin-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Panel de Administrador</h1>
    </header>
    <div class="container">
        <h2>Bienvenido, Administrador</h2>
        <p>¡Hola admin! ¿Qué acción deseas realizar?</p>
        <a href="crudproductos/crudproductos.php"><button>Ir a CRUD de Productos</button></a>
        <a href="index.php"><button class="admin-button">Ir a Inicio</button></a>
    </div>
</body>
</html>
