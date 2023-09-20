<footer class="container-fluid">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-5">
                <img src="{{ asset('images/logo-footer.svg') }}" class="img-fluid">
            </div>
            <div class="col-md-8 text-start">
                <p>
                    LAKITAS DE ARICA PROYECCION<br>
                    <a href="mailto:lakitasdearicaproyeccion@gmail.com">lakitasdearicaproyeccion@gmail.com</a><br>
                    +56 9 9549 3368<br>
                    ARICA, CHILE.<br>
                </p>
            </div>
            <div class="col-md-4 text-end">
                <img src="{{ asset('images/ministerio-cultura-artes-patrimonio.svg') }}" class="img-fluid">
            </div>
            <div class="col-md-12 text-center pb-4">
                <a href="{{ route('credits') }}" class="text-white">Créditos y Agradecimientos</a>
            </div>
        </div>
        <div class="row border-top pt-4">
            <div class="col-md-6">
                <p>© Lakitas Proyección. {{ date('Y') }}</p>
            </div>
            <div class="col-md-6 text-end">
                <a href=""><img src="{{ asset('images/icon-facebook.svg') }}" class="img-fluid"></a>
                <a href=""><img src="{{ asset('images/icon-instagram.svg') }}" class="img-fluid"></a>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid footer-bar"></div>
