@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Música')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 py-5">
                    <h1 class="text-center mb-5">Música</h1>
                    <p class="text-center">
                        El repertorio elegido por “Lakitas de Arica Proyección” para este disco, ofrece un recorrido por
                        varias épocas y estilos musicales, que alterna creaciones de su propia autoría con adaptaciones
                        de temas de otros intérpretes.
                    </p>
                    <p class="text-center">
                        Esta selección es testimonio, no solo de la versatilidad de las lakitas como instrumento, sino,
                        especialmente, de la capacidad de sus ejecutores de adecuarse a cambios en las tendencias
                        musicales y su gran virtuosismo a la hora de adaptar e imprimir un sello propio a viejas y nuevas melodías.
                    </p>
                    <p class="text-center">
                        Los ritmos van desde el antiguo vals peruano “Todos vuelven” y el bolero de Leo Dan, “El amor estuvo aquí”,
                        hasta un completo arsenal de cumbias de fines de los 80’ hasta comienzos del 2000. En tanto,
                        de las décadas de los 90’ y 2000 proceden temas folklóricos contemporáneos, adaptaciones de morenadas y tobas.
                        Por último, del rubro folklórico más tradicional, se incluyen huaynos y un takirari, creados por los músicos de “Proyección”.
                    </p>
                    <p class="text-center">
                        El afán de “Proyección” de alcanzar la perfección en el denominado “estilo Jaiña”, es patente en su
                        marcado gusto por las cumbias, temas adaptados de conjuntos tropicales que cubren un amplio espectro
                        temporal, geográfico y musical. Sus influencias abarcan desde el ya clásico estilo chicha de Los
                        Wanka’s del Perú, hasta la más moderna cumbia electrónica del limeño Roy y Los Gentiles, y evidencian
                        una clara predilección por el género sound, popularizado en Argentina, Perú y Bolivia a
                        fines de los 90’ y comienzos del 2000.
                    </p>
                    <p class="text-center">
                        Estas cumbias son temas cuyo arreglo y correcta interpretación exige al máximo la habilidad de
                        los músicos y demanda una plena compenetración entre sus filas para lograr un sonido “aguantadito
                        y salseado”. En el caso de “Proyección”, estas cualidades son fruto de su fiato como agrupación y
                        de la vasta trayectoria de sus más antiguos integrantes, muchos de los cuales militaron en emblemáticas
                        comparsas ariqueñas, como <a href="https://lakitaslosmollo.lakitasdearica.cl/" target="_blank">“Lakitas de Arica Los Mollo”</a> y “Generación del Norte”, destacadas por sus
                        adaptaciones de temas chicha y tropicales andinos (más detalles en la sección <a href="{{ route('story') }}">Historia</a>).
                    </p>
                    <p class="text-center">
                        La selección musical contenida en este disco es, en resumidas cuentas, fiel reflejo del particular recorrido
                        e identidad de “Proyección” como agrupación, un camino marcado por el criterioso rescate de aportes que
                        les hereda la larga historia musical de las lakitas en el extremo norte de Chile. Un legado que se
                        actualiza y potencia gracias a su espíritu inquieto, que los mueve a innovar imprimiendo siempre a sus
                        interpretaciones un inconfundible gusto ariqueño.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            @foreach($songs as $song)
            <div class="col-md-4 song mt-4 p-5">
                <div class="mb-4 position-relative">
                    <img src="{{ asset('images/fondo-cancion.png') }}" class="img-fluid">
                    <div class="position-absolute top-50 start-50 translate-middle play-button" onclick="toggleAudio({{ $loop->index }})">
                        <img src="{{ asset('images/play.png') }}" class="img-fluid">
                    </div>
                    <audio id="audio{{ $loop->iteration }}" src="{{ asset('mp3/'.$song['mp3']) }}"></audio>
                </div>
                <p class="mb-0 title-1">{{ $song['title-1'] }}</p>
                <p class="mb-0 title-2">{{ $song['title-2'] }}</p>
                <p class="mb-0 disk">Lakitas Proyección de Arica (2023)</p>
            </div>
            @endforeach
        </div>
    </div>

@endsection

@section('js')

    <script>
        var audioElements = document.getElementsByTagName('audio');
        var playButtons = document.getElementsByClassName('play-button');

        function toggleAudio(index) {
            var audio = audioElements[index];
            var button = playButtons[index];

            for (var i = 0; i < audioElements.length; i++) {
                if (i !== index && !audioElements[i].paused) {
                    audioElements[i].pause();
                    playButtons[i].innerHTML = '<img src="{{ asset('images/play.png') }}" class="img-fluid">';
                }
            }

            if (audio.paused) {
                audio.play();
                button.innerHTML = '<img src="{{ asset('images/pause.png') }}" class="img-fluid">';
            } else {
                audio.pause();
                audio.currentTime = 0; // Reiniciar el audio al principio
                button.innerHTML = '<img src="{{ asset('images/play.png') }}" class="img-fluid">';
            }
        }
    </script>

    @stack('scripts')
@endsection
