<x-layout>
    <?php   
    /** @var  */
    ?>
        <x-slot:title>Eliminar {{ $blog->title }}</x-slot>

        <section class="section">
            <h1 class="my-3">Eliminar {{ $blog->title }}</h1>
            <p class="mb-3">Estás a punto de eliminar la entrada del blog: "{{ $blog->title }}".</p>
            <p class="mb-3">¿Estás seguro de que deseas continuar?</p>

            <form action="{{ route('blog.delete') }}" method="post">
                @csrf
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Sí, eliminar</button>
                    <a href="{{ route('blog.admin') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>

            <section class="section">

                <h1>{{ $blog->title }}</h1>
                <span class="underline"></span>
                <img src="{{ url('./assets/img/' . $blog->image) }}" alt="">
                <p>{{ $blog->content }}</p> 
            </section>
        </section>
        
    </x-layout>