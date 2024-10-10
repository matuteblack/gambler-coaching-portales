<x-layout>
    <?php   
    /** @var  */
    ?>
        <x-slot:title>{{ $blog->title }}</x-slot>
        
        <section class="section">

            <h1>{{ $blog->title }}</h1>
            <span class="underline"></span>
            <img src="{{ url('./assets/img/' . $blog->image) }}" alt="">
            <p>{{ $blog->content }}</p> 
        </section>
    </x-layout>