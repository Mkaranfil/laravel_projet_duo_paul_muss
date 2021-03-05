<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet duo Paul/Muss</title>
    <link  rel="stylesheet"  href=" {{asset('css/app.css')}} ">
</head>
<body>
    
    <div class="container">

        <h1 class="bg-warning mt-2">Ajouter un genre: </h1>

        @include('genre')

        <h1 class="bg-warning mt-2">Formulaire: </h1>
        @include('membre')

        <h1 class="bg-success mt-5">La liste des membres: </h1>
        @include('liste')


     









    </div>








    <script  src="{{asset('js/app.js')}}"  ></script>
</body>
</html>