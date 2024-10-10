<x-layout>
    <?php   
    /** @var \App\Models\Package $package  */
    ?>
        <x-slot:title>Blog</x-slot>
        
        <section class="section">
            <h1>Blog</h1>
    
            <div class="">
                @foreach($blogs as $blog)
                <div class="">
                    <div class="">
                        <img src="{{ url('./assets/img/' . $blog->image) }}" alt="">
                    </div>
                    <div class="">
                        <div>
                            <h2>{{ $blog->title }}</h2>
                            <span class="underline"></span>
                        </div>
                        <p>{{ $blog->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </x-layout>