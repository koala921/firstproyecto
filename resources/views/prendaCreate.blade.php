<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])

</head>
<body>
    @include('components.header')
    <h3>Crea Tu Stock De Sudaderas y Playeras! </h3>
    <form action="/prenda" method="POST" id="formulario">
        @csrf
        <div class="cont-sud">
            <label for="Sudaderas">Inserta el numero en texto de Sudaderas</label>
            <input name="Sudaderas" type="text" id="Sudaderas"/> 
</div>
<div class="cont-shirts">
            <label for="Playeras">Inserta el numero en texto de Playeras</label>
            <input name="Playeras" type="text" id="Playeras"/> 
</div>
<div class="cont-shirts">
    <label for="categorias">Categorias</label>
    <br>
    <select id="categorias" name="categorias[]" multiple>
        <option value=" disabled selected">Selecciona una categoria </option>
        @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->Talla}}<br>
                {{$categoria->Tipo}}</option>
        @endforeach
    </select>
</div>

<div id="crear">
<input type="submit" name="action" value="Crear" id="button-create"/>
</div>

</form>
    @include('components.footer')

</body>
</html>