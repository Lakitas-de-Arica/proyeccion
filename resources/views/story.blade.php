@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Historia')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5 text-center">
                <h1>Historia</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <img src="{{ asset('images/8e924d10e9623b8f7f750bfa4a41d79a.jpeg') }}" class="img-fluid" style="filter: grayscale(100%);">
    </div>

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 py-5 text-center">
                    <img src="{{ asset('images/3point.svg') }}" class="img-fluid">
                </div>
                <div class="col-md-10 py-5">
                    <p class="text-center">
                        La historia de “Proyección” se inicia el año 2017 a raíz de la amistad y
                        afinidad de un grupo de sopladores, músicos de distinto recorrido y experiencia
                        que deciden tomar distancia de sus antiguas comparsas y emprender un nuevo camino al alero de su propia agrupación.
                    </p>
                    <p class="text-center">
                        Sus filas alternan “sangre joven” con sopladores curtidos al alero de
                        reconocidas zampoñadas ariqueñas, como “Lakitas de Arica Los Mollo” y
                        “Generación del Norte”. Estas comparsas, conformadas a mediados de los 80’
                        y fines de los 90’, respectivamente, representan diferentes oleadas de
                        músicos nortinos que comparten un marcado gusto por las adaptaciones de
                        populares cumbias tropicales andinas, estilo chicha que llegó para quedarse
                        en Arica en la década de 1970.
                    </p>
                    <p class="text-center">
                        Es en estas emblemáticas comparsas ariqueñas que “Lakitas Proyección de Arica”
                        encuentra los referentes y la inspiración para desarrollar su propio lenguaje musical.
                        Un lenguaje depurado con creatividad y trabajo que se transforma en el sello
                        que impregna el nutrido repertorio de la agrupación.
                    </p>
                    <p class="text-center">
                        Las adaptaciones y creaciones de “Proyección” entremezclan temas de vertiente
                        tradicional y folklórica con cumbias tropicales andinas desde el chicha al
                        electrónico o sound (link a sección Música). Versatilidad y carácter musical
                        son así las cualidades que los definen y de las que hacen gala en sus presentaciones,
                        sea en las fiestas religiosas de los poblados del interior de Arica e Iquique,
                        o en cumpleaños, bautizos, challas, velorios o funerales celebrados en la urbe ariqueña.
                    </p>
                    <p class="text-center">
                        La vocación y energía de “Lakitas de Arica Proyección” se enfoca en llegar al
                        corazón de un público amplio y diverso, en animar, sobrecoger y dar solemnidad
                        cuando la ocasión así lo amerita. En esta emoción es donde encuentran su mayor
                        recompensa, de ahí su incondicional afecto por las costumbres y tradiciones
                        andinas celebradas en pequeñas localidades de los valles, sierras y altiplano
                        nortino, donde el cariño y reconocimiento de la gente se transforma en el
                        combustible que los anima a seguir adelante, creando, tocando y deleitando.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
