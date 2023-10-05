@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Proyecto')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 py-5 text-center">
                    <h1>Proyecto</h1>
                </div>
                <div class="col-md-10">
                    <p class="text-center">
                        Este proyecto es fruto de una iniciativa enfocada en poner en valor y difundir la
                        historia y producción musical de las comparsas de lakitas del extremo norte de Chile.
                        Se trata de una empresa de largo aliento, iniciada el año 2009 con el disco
                        recopilatorio “Lakitas de Arica. Una historia fonográfica” (FONDART 2009) y el
                        libro “Lakitas en Arica. Zampoñas, sopladores y ritmos en el norte de Chile” (FONDART 2010).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-project-1"></div>

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 pt-5">
                    <p class="text-center">
                        Inspirados por un espíritu catastral y por lazos de amistad forjados tras más de 15
                        años trabajando en conjunto con exponentes de las lakitas en Arica, hemos concentrado
                        últimamente nuestros esfuerzos en realizar registros musicales de alta calidad, tanto
                        de comparsas consideradas hoy fundacionales a nivel regional, como de agrupaciones
                        formadas por generaciones más jóvenes de sopladores ariqueños. Así es como nacen las
                        producciones fonográficas <a href="https://wuaynamarka.lakitasdearica.cl/" target="_blank">“Wuayna Marka. Pueblo joven de sopladores”</a> (FONDART 2018),
                        <a href="https://lakitaslosmollo.lakitasdearica.cl/" target="_blank">“Lakitas de Arica Los Mollo. Imitados pero jamás igualados”</a> (FONDART 2019) y
                        <a href="https://fusiondelnorte.lakitasdearica.cl/" target="_blank">“Lakitas Fusión del Norte. Volumen 1”</a> (FONDART 2021).
                    </p>
                </div>
                <div class="col-md-10 py-5">
                    <p class="text-center">
                        Este trabajo, realizado nuevamente con el financiamiento de FONDART (2022) y
                        gracias a un esfuerzo colectivo con los músicos de la comparsa “Lakitas Proyección de Arica”,
                        marca un hito al ser la primera de nuestras producciones fonográficas cuyo soporte
                        físico deja atrás el tradicional formato CD, reemplazándolo por un tiraje limitado de
                        pendrives con el logo de la comparsa. Los 100 ejemplares producidos en este soporte físico,
                        fueron entregados a los músicos de la comparsa como retribución, quedando a su
                        disposición para ser libremente distribuidos a través de sus propias redes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-project-1"></div>

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 pt-5">
                    <p class="text-center">
                        La música de éste, el primer disco de la comparsa “Proyección”, se encuentra aquí
                        disponible para ser <a href="{{ route('music') }}">escuchado en línea o descargado íntegramente en alta calidad</a>.
                        El registro fonográfico se acompaña y complementa con el contenido de las diferentes secciones
                        de la presente página web, en las que es posible encontrar información relativa a la <a href="{{ route('story') }}">historia de
                        la agrupación</a>, sus actuales <a href="{{ route('members') }}">integrantes</a>,
                        <a href="{{ route('galleries') }}">material gráfico de la comparsa</a>, así como detalles del repertorio
                        seleccionado para esta <a href="{{ route('music') }}">grabación</a> y los datos de contacto del grupo.
                    </p>
                </div>
                <div class="col-md-10 py-5">
                    <p class="text-center">
                        Los registros fonográficos que componen este disco fueron realizados los días, 1, 2, 8 y 9 de
                        octubre de 2022 en una parcela ubicada en la localidad de San Miguel de Azapa, comuna de Arica,
                        Región de Arica y Parinacota, la cual fue especialmente acondicionada como estudio de grabación
                        al aire libre. La formación convocada por “Proyección” para estas sesiones, contó con un total de
                        13 músicos, de los cuales 10 eran sopladores y tres percusionistas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-project-2"></div>

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 pt-5">
                    <p class="text-center">
                        Durante la etapa de postproducción de este proyecto recibimos con gran pesar la noticia del
                        fallecimiento del soplador de “Proyección”, Josué Vilca. Este sorpresivo hecho fue un duro golpe
                        para la comparsa, que quiso reconocer a Josué con el fruto mismo de su trabajo y despedirlo con las siguientes palabras: <br>
                    </p>
                    <p class="text-center mt-5">
                        <i>“Este disco está dedicado a nuestro gran amigo y compañero de fila Josué Héctor Vilca Flores, quién ha partido de
                        este mundo pero sigue vivo en nuestro sonido y el amor por la zampoña”.</i>
                    </p>
                </div>
                <div class="col-md-10 pt-5">
                    <p class="text-center">
                        Nos complace enormemente concretar y hacer entrega de este nuevo trabajo y homenaje, que
                        esperamos circule ampliamente entre los lakitas nortinos, motivándolos a seguir realizando con
                        orgullo y cariño su vital quehacer. Es nuestro anhelo también que su rica historia y prolífica
                        producción musical pueda ser conocida y disfrutada en otros territorios y por otros públicos.
                        Con este afán hemos generado a lo largo de los años alianzas con instituciones tanto a nivel
                        regional como nacional e internacional, aliados con la capacidad de difundir y dar una mayor
                        accesibilidad a este tipo de obras a través de sus propias plataformas y archivos <a href="{{ route('credits') }}">(Créditos).</a>
                    </p>
                </div>
                <div class="col-md-10 py-5">
                    <p class="text-center">
                        Sin duda la música de las de lakitas seguirá sonando fuerte y abriendo fronteras gracias al
                        exclusivo mérito de sus intérpretes, quienes con su dedicación, afecto y alegría contribuyen
                        a mantener viva y pujante una antigua y potente tradición. Este trabajo pretende ser
                        simplemente un recurso más para dar realce a su abnegada labor.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
