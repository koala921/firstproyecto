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
    <h3>Crea Una nueva Talla!! </h3>
    <form action="/categoria" method="POST" id="formulario">
        @csrf
        <div class="cont-sud">
            <label for="Tipo">Inserta el nuevo Tipo de Prenda</label>
            <input name="Tipo" type="text" id="Sudaderas"/> 
</div>
<div class="cont-shirts">
            <label for="Talla">Inserta la nueva Talla</label>
            <input name="Talla" type="text" id="Playeras"/> 
</div>
<div id="crear">
<input type="submit" name="action" value="Crear" id="button-create"/>
</div>
</form>
    @include('components.footer')

</body>
</html>