<form action="{{route('singup')}}" method="POST">
    @csrf
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" id="username" value="{{old('username')}}">
    <br>
    <label for="password">Contraseña:</label>
    <input type="text" name="password" id="password">
    <br>
    <button type="submit">Enviar</button>
</form>
