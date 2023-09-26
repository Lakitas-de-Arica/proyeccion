@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Créditos')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 py-5">
                    <h1 class="text-center mb-5">Créditos</h1>
                    <p class="text-center">
                        Producción ejecutiva e investigación: <b>César Borie</b>
                    </p>
                    <p class="text-center">
                        Sonido y asistencia de investigación: <b>Andrés Fortunato</b>
                    </p>
                    <p class="text-center">
                        Producción general: <b>Rocío Romero</b>
                    </p>
                    <p class="text-center">
                        Registro fotográfico: <b>Evaristo Jarawi</b>
                    </p>
                    <p class="text-center">
                        Registro audiovisual: <b>Evaristo Jarawi y César Borie</b>
                    </p>
                    <p class="text-center">
                        Diseño gráfico: <b>Indivisual</b>
                    </p>
                    <p class="text-center">
                        Diseño web: <b>Indivisual</b>
                    </p>
                    <p class="text-center">
                        Programación web: <b>Indivisual</b>
                    </p>
                </div>
                <div class="col-md-10 py-5">
                    <p class="fw-bold fs-5 text-center">
                        Proyecto financiado por el Fondo Nacional de Desarrollo Cultural y de las Artes, Convocatoria 2022
                    </p>
                </div>
                <div class="w-100"></div>
                <div class="col-md-2">
                    <img src="{{ asset('images/6de3a40e21471962a63556cc9c0dfef0.png') }}" class="img-fluid">
                </div>
                <div class="w-100"></div>
                <div class="col-md-10 py-5">
                    <p class="fw-bold fs-5 text-center">
                        Patrocina
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($logos as $logo)
                <div class="col-6 col-md-4 col-lg-2 col-xl-2 col-xxl-2 text-center">
                    <img src="{{ asset('images/'.$logo) }}" class="img-fluid">
                </div>
                @endforeach
            </div>
        </div>
        <div class="container pt-5">
            <div class="row justify-content-center py-5">
                <div class="col-md-12 py-5 border-top text-center">
                    <h1 class="mb-5">Agradecimientos</h1>
                    <p class="text-center">Parcela/estudio: Familias Flores y Becerra.</p>
                    <p class="text-center">Colaciones: Berta Lazcano y famila / Pensión La Mami Berta, Los Misioneros #254, San Miguel de Azapa</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
