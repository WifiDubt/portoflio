<html>
    <head>
        <title>Coiso</title>
        <link rel="stylesheet" href="/assets/app.css">
        <script src="/assets/app.js"></script>
        <script src="https://kit.fontawesome.com/3b0aa0488c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @php($langs=config('app.locales'))
        <ul id="app-menu-langs">
            @php($segments = request()->segments())
            @foreach($langs as $tLang)
                @php($segments[0] = $tLang)
                <li><a href="/{{implode('/', $segments)}}">{{$tLang}}</a></li>
            @endforeach
        </ul>
        <div id="app-menu">
            <h1>Filipe Lopes</h1>
            @php($menuItems = [
                ["icon" => "home", "label" => "bio", "link" => "/"],
                ["icon" => "timeline", "label" => "xp", "link" => "/xp"],
                ["icon" => "award", "label" => "skills", "link" => "/skills"],
            ])
            <ul id="app-menu-main">
                @foreach($menuItems as $menuItem)
                    <li>
                        <a href="{{$menuItem["link"]}}">
                            <i class="fa fa-{{$menuItem["icon"]}}"></i>
                            <div>{{__("base.{$menuItem["label"]}")}}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="app-content" class="container mt-5">
            @yield('content')
        </div>
    </body>
</html>
