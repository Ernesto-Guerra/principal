<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <title>Main Page</title>
</head>
<body>
    @csrf
    <div class="container-fluid">
        <label for="">Sistema de vigilancia</label>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">TEMPERATURA</th>
                    {{-- <th scope="col">HUMEDAD</th> --}}
                    <th scope="col">FECHA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                
                @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{$item->b64}}" alt="N/A" width="30px" height="30px"></td>
                        <td>{{$item->temperatura}}°C</td>
                        {{-- <td>{{$item->humedad}} HR</td> --}}
                        <td>{{$item->fecha}}</td>
                        <td><a class="btn btn-info">Examinar</a> <a class="btn btn-danger">Eliminar</a></td>
                    <tr>
                @endforeach
                
            </tbody>
        </table>               
        
    </div>
</body>
</html>