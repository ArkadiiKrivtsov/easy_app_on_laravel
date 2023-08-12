<header>
    <div class="header-border">
        <a class="exit_button" href="{{ route('logout') }}" title="Выйти"><i class="fa fa-sign-out"
                                                                             aria-hidden="true"></i></a>
        <ul>
            <li class="header-user-name"><i class="fa-solid fa-circle-user fa-2xl">
                </i> {{Auth::user()->name}} </li>
            <li><a class="{{ active_link('settings') }}" href="{{ route('settings') }}"> Настройки</a></li>
            <li><a class="{{ active_link('goods') }}" href="{{ route('goods') }}">Товары</a></li>
            <li><a class="{{ active_link('stocks') }}" href="{{ route('stocks') }}">Склады</a></li>
            <li><a class="{{ active_link('users') }}" href="{{ route('users') }}">Пользователи</a></li>
        </ul>
    </div>
</header>
