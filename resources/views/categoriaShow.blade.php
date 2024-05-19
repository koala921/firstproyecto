<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria </title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])

</head>
<body>
    @include('components.header')
    <h1>Categoria # {{$categoria->id}}</h1>
    <hr>
    <p class="show">Talla:  <label class="num_prendas">{{$categoria->Talla}}</label></p>
    <hr>
    <p class="show">Tipo de Prenda:  <label class="num_prendas">{{$categoria->Tipo}}</label></p>
    <label></label>
    <a id="modify" href="/categoria/{{$categoria->id}}/edit">Modificar </a>

<div class="form">
    <form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
        @csrf
        @method('DELETE')
      <button class="boton-del" type="submit" name="action" value="Eliminar">Eliminar</button>

    </form>
    <br>
    
</div>
    @include('components.footer')
</body>
</html>