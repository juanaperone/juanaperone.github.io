<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #ffff;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Media queries para dispositivos móviles */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 20px;
                margin-bottom: 15px;
            }
            input[type="text"], input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¿Qué opinas sobre el cine argentino?</h1>
        
        <?php if (isset($_GET['enviado']) && $_GET['enviado'] == 'true') : ?>
            <p>¡Gracias por tu opinión!</p>
        <?php endif; ?>

        <form method="post" action="registrar.php">
            <input type="text" name="name" placeholder="Escribí tu opinión">
            <input type="submit" name="register" value="Enviar">
        </form>
    </div>

    <?php
include("registrar.php");
?>

</body>
</html>
