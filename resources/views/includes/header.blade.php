<!-- Navbar blade for logged in users -->

<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">@yield('title')</a></h1>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="/users/questionnaires/create">Create New Questionnaire</a></li>
            <li><a href="/users/questionnaires">Questionnaires</a></li>
        </ul>

        <ul class="left">
            <li><a href="/home">Home</a></li>
        </ul>
    </section>
</nav>


