<x-layouts.app title="Crear Blog" meta-description="Formulario para creacion de nuevo blog">
    <h1>Crear nuevo Blog</h1>

    <form method="POST" action="{{ route('blog.store') }}">
        @csrf

        @dump($errors)
        <label for="">
            Titulo <br>
            <input name="titulo" type="text" value="{{ old('titulo') }}">
            <br>
            @error('titulo')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <label>
            Cuerpo <br>
            <textarea name="cuerpo">{{ old('cuerpo') }}</textarea>
        </label>
        <br>
        @error('cuerpo')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

</x-layouts.app>
