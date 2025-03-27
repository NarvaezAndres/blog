<x-layout>
    @section('title', 'Contacto')
    <h1>Contacto</h1>
    <p>Esta es la página de contacto. Puedes enviarnos un mensaje a través del formulario.</p>
    <form action="/contact" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Enviar</button>
    </form>
</x-layout>