<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Llibre</title>
    <style>
        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex; /* Enable Flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full viewport height */
        }

        .container {
            max-width: 900px;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%; /* Make container responsive */
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #bb86fc;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
            color: #e0e0e0;
        }

        .back-link {
            color: #bb86fc;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
            display: inline-block;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
            color: #ff80ff;
        }
        .navbar {
            position: fixed; /* Make the navbar fixed */
            top: 0; /* Position it at the top of the viewport */
            left: 0; /* Align it to the left */
            right: 0; /* Align it to the right */
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure it stays above other content */
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #bb86fc;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: #e0e0e0;
            font-size: 18px;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar .nav-links a:hover {
            background-color: #bb86fc;
            color: #121212;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo"><a href="/">BDs</a></div>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/books">Llibres</a>
        <a href="/leaks">Leaks</a>
    </div>
</div>


<div class="container">
    <h1>Detalls del Leak:   <?= $leak->name; ?></h1>
    <p><strong>ID:</strong> <?= $leak->id; ?></p>
    <p><strong>Títol:</strong> <?= $leak->name; ?></p>
    <p><strong>Companyia:</strong> <?= $leak->company; ?></p>
    <p><strong>Data del Leak:</strong> <?= $leak->leak_date; ?></p>
    <p><strong>Linies:</strong> <?= number_format($leak->leak_lines, 0, ',', '.'); ?></p>
    <p><strong>Nivell sensivilitat:</strong> <?= $leak->sensitivity_level; ?></p>

    <a class="back-link" href="/leaks">Volver a la Llista</a>
</div>

</body>
</html>
