@include('template.header')

@include('landing.navfoo.navbar')

<div class="main-container">
    <h1>HOME</h1>
    @include('landing.home.hero')
    {{-- @include('component.counter') --}}
    {{-- @include('component.about') --}}
    {{-- @include('component.eventkamu') --}}
    {{-- @include('component.eventbulan') --}}
    {{-- @include('component.testimoni') --}}
    {{-- @include('component.question') --}}

</div>

@include('landing.navfoo.foo')

@include('template.footer')
