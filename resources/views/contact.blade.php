@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Contacto')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 py-5">
                    <h1 class="text-center">Contacto</h1>
                </div>
                <div class="col-md-10 pb-5 text-center">
                    <a href="https://web.facebook.com/LakitasProyeccion?mibextid=ZbWKwL&_rdc=1&_rdr" target="_blank"><img src="{{ asset('images/icon-facebook.svg') }}" class="img-fluid"></a>
                    <a href="https://www.instagram.com/lakitasproyeccion/?igshid=YmMyMTA2M2Y=" target="_blank"><img src="{{ asset('images/icon-instagram.svg') }}" class="img-fluid"></a>
                    <a href="https://www.youtube.com/@lakitasdearicaproyeccion1122" target="_blank"><img src="{{ asset('images/icon-youtube.png') }}" class="img-fluid ms-2" style="height: 39px; width: auto;"></a>
                </div>
                <div class="col-md-10 pb-5 text-center">
                    <p class="mb-1"><b>Fono:</b> <a href="tel:56995493368" target="_blank">+56 9 95493368</a></p>
                    <p class="mb-2"><b>Mail:</b> <a href="mailto:lakitasdearicaproyeccion@gmail.com" target="_blank">lakitasdearicaproyeccion@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
