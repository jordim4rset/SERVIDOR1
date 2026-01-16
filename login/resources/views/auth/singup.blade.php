<form action="{{route('singup')}}" method="POST">
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" id="username" value="{{old('username')}}">
    <br>
    <label for="name">Nombre completo:</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="{{old('email')}}">
    <br>
    <label for="password">Contraseña:</label>
    <input type="text" name="password" id="password">
    <br>
    <label for="password_confirmation">Repite la contraseña:</label>
    <input type="text" name="password_confirmation" id="password_confirmation">
    <br>
    <button type="submit">Enviar</button>
</form>

@if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
@endif
