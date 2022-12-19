<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hai ricevuto un nuovo messaggio da {{ $contact['name'] }}</h2>
    <h2>Servizio richiesto: {{ $contact['service'] }}</h2>
    <h2>Dati di contatto:</h2>
    <p>{{ $contact['email'] }}</p>
    <p>{{ $contact['phone'] }}</p>
    <h2>Messaggio:</h2>
    <p>{{ $contact['message'] }}</p>
</body>
</html>