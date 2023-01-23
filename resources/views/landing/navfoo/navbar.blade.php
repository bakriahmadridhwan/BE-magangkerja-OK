<header>
    <nav class="container main-container">
        <a href="#" class="logo"><img src="{{ asset('img/logo.png') }}" alt="logo" width="100"></a>
        <div class="links">
            <a href="/" id="home" class="{{ Request::is('/') ? 'active' : '' }}">Home<span></span></a>
            <a href="/events" id="event" class="{{ Request::is('events') ? 'active' : '' }}">Event<span></span></a>
            <a href="/abouts" class="{{ Request::is('abouts') ? 'active' : '' }}">About<span></span></a>

            <div class="dropdown">
                <a href="/achievements" class="{{ Request::is('achievements') ? 'active' : '' }}">Achievement
                    <i class="fa-solid fa-angle-right down"></i><span></span></a>
                <div class="dropdown-content">
                    <a href="">Link 1</a>
                    <a href="">Link 2</a>
                </div>
            </div>


            <a href="/login">Login</a>

            {{-- <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div> --}}

        </div>
    </nav>
</header>
