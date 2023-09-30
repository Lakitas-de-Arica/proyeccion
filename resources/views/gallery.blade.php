@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Galerías')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5 text-center">
                <h1>Galerías</h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3 mb-5">
                    <a class="gallery rounded-3 shadow d-flex align-items-center"
                        href="{{ route('galleries',['section' => 'making-of']) }}"
                        style="background-image: url({{ asset('images/Making-of.jpg') }});">
                        <div class="col text-center">Making of</div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3 mb-5">
                    <a class="gallery rounded-3 shadow d-flex align-items-center"
                        href="{{ route('galleries',['section' => 'alto-ramirez-2019']) }}"
                        style="background-image: url({{ asset('images/Alto-Ramirez-2019.jpg') }});">
                        <div class="col text-center">Alto Ramirez 2019</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
