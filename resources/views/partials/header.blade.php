<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/ZNOT-2024.png') }}" alt="ZNOT 2024 Logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Razpis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pravila') ? 'active' : '' }}" href="{{ route('pravila') }}">Pravila</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rezultati') ? 'active' : '' }}" href="{{ route('rezultati') }}">Rezultati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galerija') ? 'active' : '' }}" href="{{ route('galerija') }}">Galerija</a>
                </li>
            </ul>
        </div>
    </div>
</nav>