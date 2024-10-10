<x-layout>
    <?php   
    /** @var \App\Models\Package $package  */
    ?>
        <x-slot:title>Administrar Blog</x-slot>
        
        <section class="section">
            <h1 class="mb-4">Administrar Blog</h1>
            <div>
                <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Publicar una entrada</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        {{-- <th>Imagen</th> --}}
                        {{-- <th>Contenido</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->blog_id }}</td>
                        <td>{{ $blog->title }}</td>
                        {{-- <td>{{ $blog->image }}</td> --}}
                        {{-- <td>{{ $blog->content }}</td> --}}
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('blog.show', ['id' => $blog->blog_id]) }}" class="btn btn-secondary container-fluid m-1">Ver</a>
                                <a href="{{ route('blog.edit', ['id' => $blog->blog_id]) }}" class="btn btn-primary container-fluid m-1">Editar</a>
                                <a href="{{ route('blog.delete', ['id' => $blog->blog_id]) }}" class="btn btn-danger container-fluid m-1">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </x-layout>
