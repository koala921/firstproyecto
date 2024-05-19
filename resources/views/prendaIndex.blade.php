<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])
</head>
<body>
    @include('components.header')
    @if (@session()->has('success'))
                <p id="alert-del">Se Borro Correctamente</p>
    @endif
    <h1>Prendas</h1>
    <a id="crear-prenda" href="/prenda/create">Crear Prenda</a>

    <table>
       <thead>
        <tr>
            <th>ID</th>
            <th>Sudaderas</th>
            <th>Playeras</th>
            <th>Categorias</th>
            <th>Creado</th>
</tr>
</thead>
<tbody>

    @foreach ($prendas as $prenda)
    <tr>
     <td> {{$prenda->id}}</td>
     <td> {{$prenda->Sudaderas}}</td>
     <td> {{$prenda->Playeras}}</td>
     <td>
        @foreach ($prenda->categorias as $categoria)
                {{$categoria->categoria}}   
                {{$categoria->Talla}}
                {{$categoria->Tipo}}
                <br>
        @endforeach
     </td>        
     <td> {{$prenda->created_at}}</td>
     <td> <a href="/prenda/{{$prenda->id}}">Editar </a>
     </tr>
    @endforeach

</tbody>
    </table>
@include('components.footer')
</body>
</html>