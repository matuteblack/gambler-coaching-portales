<x-layout>
    <?php   
    /** @var \App\Models\Package $package  */
    ?>
        <x-slot:title>Paquete {{ $package->name }}</x-slot>
        
        <div class="card-show">
            <div class="description">
                <h1>Paquete {{ $package->name }}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, laborum nam inventore, officia culpa provident id magnam velit corporis ratione, pariatur quia nemo dicta! Ut debitis inventore similique accusantium quidem.</p>
            </div>

            <div class="package-card">
                <div class="card-row-1">
                    <!-- <img src="{{ $package->image }}" alt=""> -->
                    <img src="{{ url('./assets/img/challenger-2023.png') }}" alt="">
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
                    <a href="{{ url('paquetes/' . $package->package_id) }}">COMPRAR</a>
                </div>
            </div>
        </div>
    
    </x-layout>