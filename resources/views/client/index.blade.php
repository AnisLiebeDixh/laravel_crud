<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Resetting default margin and padding */
        body, table {
            margin: 0;
            padding: 0;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border: 1px solid #dddddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Link styles */
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            content: center;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>adresse</th>
            <th>action</th>

        </tr>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}} </td>
                <td>{{$client->name}} </td>
                <td>{{$client->email}} </td>
                <td>{{$client->adresse}}  </td>
                <td>
                   <button>
                        <a href="{{url("client/".$client->id . "/edit")}} ">Modifier</a>
                   </button> 
                   <button>
                        <a href="{{url("client/destroy/" . $client->id )}} ">Supprimer</a>
                   </button>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{url("client/create")}} ">Create new client </a>
</body>
</html>