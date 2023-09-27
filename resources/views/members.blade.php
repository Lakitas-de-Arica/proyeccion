@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Integrantes')

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 py-5">
                    <h1 class="text-center mb-5">Integrantes</h1>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                @foreach($members as $member)
                <div class="col-md-3 mb-5">
                    <div class="member">
                        <img src="{{ asset('images/members/'.$member['image']) }}" alt="member" class="img-fluid mb-4">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{ $member['name'] }}</h4>
                                <h5>{!! $member['instrument'] !!}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')
@endsection
