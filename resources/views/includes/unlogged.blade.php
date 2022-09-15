<!-- Navbar blade for anonymous users -->

<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">@yield('title')</a></h1>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>

        <ul class="left">
            <li><a href="/">Home</a></li>
        </ul>
    </section>
</nav>
