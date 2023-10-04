<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo Contatto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button-custom{
            background-color: rgba(0, 70, 88, 0.9);
            border-radius: 21px;
            color: #fffff2;
            display: inline-block;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: .1em;
            line-height: 18px;
            padding: 12px 30px;
            margin: 0 10px 10px 0;
            text-decoration: none;
            text-transform: uppercase;
            transition: background-color .2s;
            cursor: pointer;
            position: relative;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Nuovo Contatto</h1>
    <ul>

        <li><strong>Motivazioni:</strong> {{$motive}}</li>
        <li><strong>User:</strong> {{$user->name}}</li>
        <li><strong>Email:</strong> {{$user->email}}</li>
    </ul>
    <p>Grazie per aggiungere un nuovo contatto. Per favore, considera di rendere questo utente un Revisore.</p>

</div>
</body>
</html>
