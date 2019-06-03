<footer>
    <nav>
        @if(Auth::check())
            <p>
                {{ Auth()->user()->name }}
            </p>
            <a href="/logout" class="nal-link ml-auto">
                Logout
            </a>
        @endif
    </nav>
</footer>