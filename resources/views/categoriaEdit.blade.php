<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    @vite(['resources/css/styles.css','resoruces/css/app.css'])

</head>

<body>
    @include('components.header')
    <h4>Edita el Tipo y la Talla de Prendas!</h4>
    <form method="POST" action="/categoria/{{$categoria->id }}" id="formulario">

        @csrf
        @method('patch')
        <div class="cont-mod">
            <label class="hoodie" for="Tipo">Escribe la Modificacion del Tipo de Prenda</label>
            <input type="text" name="Tipo" value="{{$categoria->Tipo }}" id="sudaderas">
        </div>
            <div class="cont-mod">
            <label class="shirt" for="Talla">Escribe la nueva Talla</label>
            <input type="text" name="Talla" id="tshirts" value="{{$categoria->Talla }}">
            </div>
            <div id="crear">
            <input type="submit" name="action" value="Enviar" id="button-create"/>
            </div>    
        </form>
    @include('components.footer')
</body>

</html>