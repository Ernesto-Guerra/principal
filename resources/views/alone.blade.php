<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <title>Dato {{$dato->id}}</title>
</head>
<body style="background-color: black">
    @csrf
    <div class="container-fluid">                      

        <center>
            <h1 style="color: white">Imagen del {{$dato->fecha}}</h1><br>
            <img src="{{$dato->b64}}" alt="NA" style="border-radius: 20px; width: 700px; height: 400px;">
        </center>

        <br>
        <h2 style="color: white">Temperatura: {{$dato->temperatura}}°C</h2>
        
        
    </div>
</body>
</html>