<x-layout>

    @section('title', 'Blog')
    <h1>Blog</h1>
    <p>Lista de productos</p>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>

</x-layout>