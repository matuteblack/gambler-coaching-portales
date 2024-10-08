<x-layout>
<?php   
/** @var \App\Models\Package[]\Illuminate\Database\Eloquent\Collection $packages  */
?>
    <x-slot:title>Paquetes</x-slot>
    
    <section class="section paquetes">
        <h1>Paquetes</h1>

        <div class="card-container">
            @foreach($packages as $package)
            <div class="package-card">
                <div class="card-row-1">
                    <img src="{{ url('./assets/img/' . $package->image) }}" alt="">
                </div>
                <div class="card-row-2">
                    <div>
                        <p>{{ $package->type }}</p>
                        <h2>{{ $package->name }}</h2>
                        <!-- <p>{{ $package->packageLevel }}</p> -->
                        <span class="underline"></span>
                    </div>
                    <p>$ {{ $package->price }}</p>
                </div>
                <div class="card-row-3">
                    <img src="{{ url('./assets/icon/clock-icon.png') }}" alt="">
                    <p>{{ $package->sessions }} SESIONES DE COACHING + VOD</p>
                </div>
                <div class="card-row-4">
                    <a href="{{ route('packages', ['id' => $package->package_id]) }}">VER PAQUETE</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>