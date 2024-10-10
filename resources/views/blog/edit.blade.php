<x-layout>
    <?php   
    /** @var */
    ?>
        <x-slot:title>Editar la entrada "{{ $blog->title }}"</x-slot>
        <section class="section">
            <h1 class="mb-4">Editar la entrada "{{ $blog->title }}"</h1>

            @if($errors->any())
                <div class="bi bi-x-circle-fill alert alert-danger me-2"> Hay errores en los datos ingresados.</div>
            @endif
            
            <form action="{{ route('blog.edit') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        class="form-control"
                        value="{{ old('title', $blog->title) }}"
                        @error('title') aria-errormessage="error-title" @enderror
                    >
                    @error('title')
                        <div class="bi bi-exclamation-triangle-fill mt-2 text-danger" id="error-title"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 d-flex">
                    <div class="me-4 w-25">
                        <label for="image" class="form-label">Imagen</label>
                        <input 
                            type="text" 
                            id="image" 
                            name="image" 
                            class="form-control"
                            value="{{ old('image', $blog->image) }}"
                            @error('image') aria-errormessage="error-image" @enderror
                        >
                        @error('image')
                            <div class="bi bi-exclamation-triangle-fill text-danger mt-2" id="error-image"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-50">
                        <label for="alt" class="form-label">Descripción de la imagen</label>
                        <input 
                            type="text" 
                            id="alt" 
                            name="alt"
                            class="form-control"
                            value="{{ old('alt', $blog->alt) }}"
                            @error('alt') aria-errormessage="error-alt" @enderror
                        >
                        @error('alt')
                            <div class="bi bi-exclamation-triangle-fill text-danger mt-2" id="error-alt"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea  
                        type="textarea" 
                        id="content" 
                        name="content" 
                        class="form-control"
                        cols="30" 
                        rows="10"
                        @error('content') aria-errormessage="error-content" @enderror
                    >{{ old('content', $blog->content) }}</textarea>
                    @error('content')
                        <div class="bi bi-exclamation-triangle-fill text-danger mt-2" id="error-content"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    <a href="{{ route('blog.admin') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </section>
    </x-layout>