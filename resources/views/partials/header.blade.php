<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ route('blog.index') }}" class="navbar-brand">Laravel Basics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="{{ route('blog.index') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('other.about') }}" class="nav-link">About</a></li>
        </ul>
    </div>
</nav>