<header class="l-header bg-white" id="header">
    <nav class="nav bd-container bg-white">
        <p class="nav__logo">PT Berbinar Insightful Indonesia</p>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="{{ route('home') }}" class="nav__link {{ $active == 'Home' ? 'active-link' : '' }}">Home</a></li>
                <li class="nav__item"><a href="{{ route('tentang-kami') }}" class="nav__link {{ $active == 'Tentang Kami' ? 'active-link' : '' }}">Tentang Kami</a></li>
                <li class="nav__item"><a href="{{ route('produk-berbinar') }}" class="nav__link {{ $active == 'Produk Berbinar' ? 'active-link' : '' }}">Produk Berbinar</a></li>
                <li class="nav__item"><a href="{{ route('workWithUs') }}" class="nav__link {{ $active == 'Work With Us' ? 'active-link' : '' }}">Work With Us</a></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-grid-alt'></i>
        </div>
    </nav>
</header>