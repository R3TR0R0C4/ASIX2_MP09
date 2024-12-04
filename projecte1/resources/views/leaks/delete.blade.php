<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <style>
        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #bb86fc;
            text-align: center;
            margin-bottom: 20px; /* Add spacing between title and div */
        }

        div {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        strong {
            color: #bb86fc;
        }

        form {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #ff4081;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e91e63;
        }

        a {
            padding: 10px 20px;
            background-color: #444;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #bb86fc;
            color: #121212;
        }
    </style>
</head>
<body>
<h1>Eliminar leak:</h1>
<div>
    <p>Estàs segur que vols eliminar el leak <strong><?= $leak->name ?></strong>?</p>
    <form action="/leaks/destroy/<?= $leak->id ?>" method="POST">
        <button type="submit">Eliminar</button>
        <a href="/leaks">Cancel·lar</a>
    </form>
</div>
</body>
</html>
