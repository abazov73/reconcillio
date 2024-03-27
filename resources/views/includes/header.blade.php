<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        
        <a class="navbar-brand mx-1" href="{{ url('/') }}">
            <i class="fa-solid fa-address-card"></i> {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('invoices.index')}}">Invoices</a>
                </li>
            </ul>
        </div>
    </div>
</nav>