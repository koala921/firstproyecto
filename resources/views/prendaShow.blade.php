<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prenda #{{$prenda->id}}</title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])

</head>
<body>
    @include('components.header')
    <h1>Prenda #{{$prenda->id}}</h1>
    @foreach ($prenda->categorias as $categoria)
        <h5>{{$categoria->Talla}}<br><br>
            {{$categoria->Tipo}}
        </h5>
    @endforeach
    <hr>
    <p class="show">Numero de Sudaderas:  <label class="num_prendas">{{$prenda->Sudaderas}}</label></p>
    <hr>
    <p class="show">Numero de Playeras:  <label class="num_prendas">{{$prenda->Playeras}}</label></p>
    <hr>
    <p class="show">Creado en: <label class="num_prendas">{{$prenda->created_at}}</label></p>
    <hr>
    <label></label>
    <a id="modify" href="/prenda/{{$prenda->id}}/edit">Modificar </a>

<div class="form">
    <form method="POST" action="/prenda/{{$prenda->id}}" id="formulario">
        @csrf
        @method('DELETE')
      <button class="boton-del" type="submit" name="action" value="Eliminar">Eliminar</button>

    </form>
    <br>
    
</div>
    @include('components.footer')
</body>
</html>