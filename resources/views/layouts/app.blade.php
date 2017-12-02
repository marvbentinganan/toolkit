<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" id="favicon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="ui inverted top fixed borderless large menu">
        <a class="header item"  id="sideshow"><i class="ion-android-home icon"></i>RCI I.T. Department Toolkit</a>
        <div class="right menu">
            <div class="item">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</div>
            <div class="ui dropdown link item">
                    {{ Auth::user()->firstname }}
                    <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" id="logout"><i class="sign out icon"></i>Logout</div>
                </div>
            </div>
        </div>
    </nav>
    <div class="ui grid container">
        <div class="sixteen wide column">
            @yield('content')
        </div>
    </div>

    <div class="ui basic modal">
        <div class="ui icon header">
            <i class="inverted red circular question icon"></i>
            CONFIRMATION
        </div>
        <div class="content">
            <p>Are you sure you want to Logout of the System?</p>
        </div>
        <div class="actions">
            <form action="{{ route('logout') }}" method="POST" style="display: hidden;">
                {{ csrf_field() }}
                <div class="ui red basic cancel inverted button"><i class="remove icon"></i>No</div>
                <button type="submit" class="ui green ok inverted button"><i class="checkmark icon"></i>Yes</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script>
        $('#logout').click(function(){
            $('.ui.basic.modal').modal('show');
        });
        $('.dropdown').dropdown();
    </script>
    @yield('scripts')
</body>
</html>
