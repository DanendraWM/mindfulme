@if ($title !== 'login' && $title !== 'error' && $title !== 'register')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom ">
        <div class="container">
            <a href="{{ $title === 'continue' ? '#' : '/' }}" class="navbar-brand font-weight-bold">MindFulMe</a><button
                class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-capitalize {{ $title === 'home' ? 'active font-weight-bold' : '' }}"> <a
                            class="nav-link " href="/">{{ $title === 'continue' ? '' : 'home' }}</a>
                    </li>
                    <li class="nav-item text-capitalize {{ $title === 'jadwal' ? 'active font-weight-bold' : '' }}">
                        <a class="nav-link " href="/jadwal">{{ $title === 'continue' ? '' : 'jadwal' }}</a>
                    </li>
                    <li class="nav-item text-capitalize {{ $title === 'profile' ? 'active font-weight-bold' : '' }}">
                        <a class="nav-link " href="/profile">{{ $title === 'continue' ? '' : 'profile' }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                                <img src="{{ asset('image/logo/' . auth()->user()->image) }}" class="nav-img rounded-circle"
                                    width="20">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center" href="/profile">Profile <i
                                        class="bi bi-person-circle"></i></a>
                                @if (auth()->user()->level === 'admin')
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-center" href="/listdokter">List Dokter</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-center" href="/jadwaljanji">List jadwal</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="cursor: pointer">Log Out
                                        <i class="bi bi-box-arrow-right"></i></button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item {{ $title === 'login' ? 'active font-weight-bold' : '' }}">
                            <a class="nav-link" href="/login">login</a>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
@endif
