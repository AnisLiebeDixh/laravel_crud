<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="form-container">
        <form action="liste" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            

            <label for="adresse">Adreses:</label>
            <input type="text" id="adresse" name="adresse">

            <button type="submit" value="submit">Valider</button>
        </form>
</body>
</html>