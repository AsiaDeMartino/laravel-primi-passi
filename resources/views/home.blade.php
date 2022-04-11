@php 

$utenti = [
    [
        "nome"=>"Mario",
        "cognome"=>"Rossi",
        "e-mail"=>"MarioRossi@email.com"
    ],
    [
        "nome"=>"Gianni",
        "cognome"=>"Bianchi",
        "e-mail"=>"GianniBianchi@email.com"
    ],
    [
        "nome"=>"Anna",
        "cognome"=>"Verdi",
        "e-mail"=>"AnnaVerdi@email.com"
    ],
    [
        "nome"=>"Giuseppe",
        "cognome"=>"Esposito",
        "e-mail"=>"GiuseppeEsposito@email.com"
    ],
    [
        "nome"=>"Francesco",
        "cognome"=>"Tani",
        "e-mail"=>"FrancescoTani@email.com"
    ]

];

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>HELLO WORLD</h1> --}}
    @foreach ($utenti as $item)
    <h1>Il tuo nome utente è: {{$item['nome']}} {{$item['cognome']}}</h1>
    <p>L'e-mail che hai utilizzato è: {{$item['e-mail']}}</p>
    @endforeach
    
</body>
</html>