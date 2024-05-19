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
    <h1>Categorias</h1>
    <a id="crear-categoria" href="/categoria/create">Crear Categoria/Talla</a>

    <table>
       <thead>
        <tr>
            <th>ID</th>
            <th>Talla</th>
            <th>Tipo</th>
            <th>Edicion</th>
</tr>
</thead>
<tbody>

    @foreach ($categorias as $categoria)
    <tr>
     <td> {{$categoria->id}}</td>
     <td> {{$categoria->Talla}}</td>
     <td> {{$categoria->Tipo}}</td>
    <td> <a href="/categoria/{{$categoria->id}}">Editar </a>
     </tr>
    @endforeach

</tbody>
    </table>
@include('components.footer')
</body>
</html>