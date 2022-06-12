<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medicine House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h1>Medicine Information</h1>
        <div>
            @if ($id ==1)
                <h2>Panadol Extra <br></h2>
                <p>Harga : Rp. 10.000</p>
            @else
                <h2>Rhinos<br></h2>
                <p>Harga : Rp. 100.000</p>
            @endif           
        </div>
    </body>
</html>
