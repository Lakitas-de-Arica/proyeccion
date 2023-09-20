@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Inicio')

@section('css')
@endsection

@section('content')

    <div class="container-fluid banner-home">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/logo.svg') }}" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-8 py-5 text-center">
                <img src="{{ asset('images/3point.svg') }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="text-center text-home">
                    La comparsa “Lakitas de Arica Proyección” agrupa a sopladores de larga trayectoria y
                    músicos jóvenes con el ambicioso propósito de alcanzar la perfección en el estilo musical.
                    Tal como su nombre sugiere, “Proyección” es una comparsa que se aventura a explorar nuevos
                    horizontes, con un prolijo trabajo de selección y adaptación de repertorio que no tranza en
                    términos de calidad y ejecución. Sus interpretaciones transmiten un profundo respeto por la
                    tradición de los lakitas nortinos, de la cual son orgullosos herederos, y están impregnadas
                    de un particular gusto ariqueño.
                </p>
            </div>
            <div class="col-md-12 pt-5">
                <p class="text-center text-home">PATROCINA</p>
            </div>
            @foreach ($logos as $logo)
            <div class="col-md-2">
                <img src="{{ asset('images/'.$logo) }}" class="img-fluid">
            </div>
            @endforeach
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
