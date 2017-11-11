@include('backend.layouts.header')

<header class="main-header">

    <a href="{{ route('index') }}" class="logo">
        <span class="logo-mini"><b>L</b></span>
        <span class="logo-lg"><b>Nails By Lee</b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        @include('backend.layouts.menu')
    </nav>

</header>

<aside class="main-sidebar">
    @include('backend.layouts.leftbar')
</aside>

@yield('content')

@include('backend.layouts.footer')