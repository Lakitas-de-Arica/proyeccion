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
                    <p class="text-center fw-bold">
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
                        adaptaciones de temas chicha y tropicales andinos (más detalles en la sección <b>Historia</b>).
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

@endsection

@section('js')
    @stack('scripts')
@endsection
