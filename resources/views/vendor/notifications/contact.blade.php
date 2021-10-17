<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        .container{
            background-image: linear-gradient(310deg, rgba(0, 0, 255, 0.88), rgba(2, 2, 255, 0.88)), url("{{ appSettings()->getMedia('logo')->first()->getFullUrl() }}");
            background-size: cover;
            background-position: center;
            padding: 10%;
            border-radius: 5%;
            color: white;

        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center; font-size:20px; color:white; padding:2px">{{ strtoupper($contact->name) }}</h1>
        <h3>Subject : {{ $contact->subject }}</h3>
           <p>
               {{ $contact->message }}
           </p>
</div>
</body>
</html>
