<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Hola Mundo</title>
</head>
<body>
@foreach ( $nombres as $nombre )
    
    <p>Saludos, {{ $nombre }}.</p>
    <p>¿Le apetece una partidita de ajedrez?</p>

@endforeach

{{--}} hola {{--}}

</body>
</html>
