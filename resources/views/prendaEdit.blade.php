<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prendas</title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])

</head>

<body>
    @include('components.header')
    <h4>Edita el Numero de Prendas!</h4>
    <form method="POST" action="/prenda/{{ $prenda->id }}" id="formulario">

        @csrf
        @method('patch')
        <div class="cont-mod">
            <label class="hoodie" for="Sudaderas">Escribe el numero de Sudaderas</label>
            <input type="text" name="Sudaderas" value="{{ $prenda->Sudaderas }}" id="sudaderas">
        </div>
        <div class="cont-mod">
            <label class="shirt" for="playeras">Escribe el numero de Playeras</label>
            <input type="text" name="playeras" id="tshirts" value="{{ $prenda->Playeras }}">
        </div>
        <div class="cont-shirts">
        <select id="categorias" name="categorias[]" multiple>
            <option value="disabled selected">Selecciona una categoria </option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}"> 
                    @if ($prenda->categorias->contains({{$categoria->id}})) selected @endif<br><br>
                    {{$categoria->Talla}}
                    {{$categoria->Tipo}}
                </option>
            @endforeach
        </select>
        <label for="categorias">Categorias</label>
    </div>
        
        <div id="crear">
            <input type="submit" name="action" value="Enviar" id="button-create"/>
            </div>    
        </form>
    @include('components.footer')
</body>

</html>
