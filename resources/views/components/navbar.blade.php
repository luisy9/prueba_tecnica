<nav>
    <div class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
            <h1 class="h2 fw-light"><a href="/" class="nav-link active">Bookstore</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav px-md-0 px-lg-5">
                    <li class="nav-item "><a class="nav-link active" href="/authors">Authors</a></li>
                    <li class="nav-item "><a class="nav-link active" href="/books">Books</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           {{ LaravelLocalization::getCurrentLocale()}}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item text-uppercase">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>  
</nav>