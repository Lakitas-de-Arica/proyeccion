<nav class="navbar navbar-expand-lg navbar-light py-3 @if(Route::currentRouteName() == 'home') navbar-home @endif" aria-label="Third navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.svg') }}" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse rounded" id="navbarsExample03">
            <ul class="navbar-nav ms-3 ms-lg-5 mb-2 mb-sm-0 py-4">
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'project' ) active @endif" href="{{ route('project') }}">Proyecto</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'story' ) active @endif" href="{{ route('story') }}">Historia</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'music' ) active @endif" href="{{ route('music') }}">Música</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'members' ) active @endif" href="{{ route('music') }}">Integrantes</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'galleries' ) active @endif" href="{{ route('music') }}">Galerías</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="nav-link @if( Route::currentRouteName() == 'credits' ) active @endif" href="{{ route('credits') }}">Créditos</a>
                </li>
                <li class="nav-item mx-xxl-3 mx-lg-1 mx-md-1">
                    <a class="btn btn-primary btn-sm" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
