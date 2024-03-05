<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Resetting default margin and padding */
        body, form {
            margin: 0;
            padding: 0;
        }

        /* Form container styles */
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Label styles */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Input styles */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Submit button styles */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="{{ url('client/'.$client->id) }}" method="POST">
    @csrf
    @method("PUT")
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" >
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" >
    
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" value="{{ $client->adresse }}">
    
    <input type="submit" value="Modifier" href="{{url("client.edit")}}">
</form>

</body>
</html>