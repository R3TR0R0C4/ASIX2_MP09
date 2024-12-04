<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Leak</title>
    <style>
        * {
            box-sizing: border-box; /* Apply box-sizing to all elements */
        }

        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #bb86fc;
            text-align: center;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #e0e0e0;
        }

        input, select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #2c2c2c;
            color: #ffffff;
            margin: 0; /* Remove margin that might be adding extra space */
        }

        input:focus, select:focus {
            outline: none;
            border-color: #bb86fc;
            background-color: #3a3a3a;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #03a9f4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0288d1;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #bb86fc;
            text-decoration: none;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
            color: #ff80ff;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Editar Leak: <?= $leak->name ?></h1>
    <form action="/leaks/update/<?= $leak->id ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?= $leak->name ?>" required>
        </div>
        <div>
            <label for="company">Empresa</label>
            <input type="text" name="company" id="company" value="<?= $leak->company ?>">
        </div>
        <div>
            <label for="leak_date">Data de filtració</label>
            <input type="date" name="leak_date" id="leak_date" value="<?= $leak->leak_date ?>">
        </div>
        <div>
            <label for="leak_lines">Línies</label>
            <input type="number" name="leak_lines" id="leak_lines" min="0" value="<?= $leak->leak_lines ?>">
        </div>
        <div>
            <label for="sensitivity_level">Nivell de sensibilitat</label>
            <select name="sensitivity_level" id="sensitivity_level">
                <option value="Low" <?= $leak->sensitivity_level === 'Low' ? 'selected' : '' ?>>Baix</option>
                <option value="Medium" <?= $leak->sensitivity_level === 'Medium' ? 'selected' : '' ?>>Mitjà</option>
                <option value="High" <?= $leak->sensitivity_level === 'High' ? 'selected' : '' ?>>Alt</option>
            </select>
        </div>
        <button type="submit">Editar</button>
    </form>
    <a class="back-link" href="/leaks">Volver a la Llista</a>
</div>
</body>
</html>
