<x-layout>
    <?php   
    /** @var \App\Models\Package $package  */
    ?>
        <x-slot:title>Paquete {{ $package->name }}</x-slot>
        
        <div class="card-show">
            <div class="show-description">
                {{-- <p>{{ $package->type }}</p> --}}
                <h1>{{ $package->type . " " . $package->name }}</h1>
                <span class="underline"></span>
                <p class="description">{{ $package->description }} </p>
            </div>

            <div class="package-card">
                <div class="card-row-1">
                    <img src="{{ url('./assets/img/' . $package->image) }}" alt="">
                </div>
                <div class="card-row-2">
                    <div>
                        <p>Paquete SoloQ</p>
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
                    <a href="{{ route('packages', ['id' => $package->package_id]) }}">COMPRAR</a>
                </div>
            </div>
        </div>
    
    </x-layout>