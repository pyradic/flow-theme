<header id="header">
    
    <div class="header__brand">
        {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
        <span>{{ config('app.name') }}</span>
    </div>

    <div class="header__toggle">
        <button>
            {!! img('anomaly.theme.flow::img/menu-open.svg')->data() !!}
        </button>
        <button>
            {!! img('anomaly.theme.flow::img/menu-close.svg')->data() !!}
        </button>
    </div>

    <nav>
        <div>
            @foreach (cp()->getShortcuts()->decorate() as $shortcut)
                <a {!! html_attributes($shortcut->getAttributes()) !!}>
                    {{ $shortcut->getTitle() }}
                </a>
            @endforeach
        </div>
    </nav>

</header>