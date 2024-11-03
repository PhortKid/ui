<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Scripts -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
     @include('layouts.navbar')
    <div class="container">
         @include('layouts.message')
        @yield('content')
    </div>
</body>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</html>