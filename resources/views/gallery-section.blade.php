@extends('layout.master')

@section('title_1','Lakitas Proyección')
@section('title_2','Galerías - '.$title)

@section('css')
@endsection

@section('content')

    <div class="container-fluid bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 pt-5 text-start">
                    <a href="{{ route('galleries') }}">< Volver a la Galería</a>
                </div>
                <div class="col-md-8 py-5 text-center">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12">
                    <div class="photos">
                        @foreach($photos as $photo)
                            <a href="{{ $photo['file'] }}"
                                target="_blank" rel="noreferrer"
                                data-pswp-width="{{ $photo['width'] }}"
                                data-pswp-height="{{ $photo['height'] }}">
                                <div class="image" style="background-image: url({{ $photo['file'] }})"></div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @stack('scripts')

    <script type="text/javascript">
        var lightbox = new PhotoSwipeLightbox({
            gallery: '.photos',
            children: 'a',
            bgOpacity: 0.6,
            showHideAnimationType: 'zoom',
            // dynamic import is not supported in UMD version
            pswpModule: PhotoSwipe
        });
        lightbox.init();
    </script>
@endsection
