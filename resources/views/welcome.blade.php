<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitch Notes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">

    </head>
    <body>
        <div class="container">
            <nav class="level">
                <div class="level-left">
                <div class="level-item">
                    <p class="subtitle is-5">Twitch Notes</p>

                </div>

                </div>

                <div class="level-right">
                    @auth
                    <p class="level-item">
                        <a href="https://www.twitch.tv/{{ Auth::user()->username }}" target="_blank">
                            <img src="{{ Auth::user()->avatar }}" width="30" />
                        </a>
                    </p>
                    <p class="level-item">{{ Auth::user()->username }}</p>
                    @endauth


                    @auth
                        <p class="level-item"><a href="{{ url('/streamers') }}">Streamers</a></p>
                        <p class="level-item"><a href="{{ url('/logout') }}">Logout</a></p>
                    @else
                        <p class="level-item"><a href="{{ url('/login') }}">Login</a></p>
                    @endauth
                </div>
            </nav>

            <div class="top-right links">

            </div>

            <div class="content">
                <h4>Welcome!</h4>
                @auth
                    <p>Go to <a href="{{ url('/streamers') }}">Streamers</a> to start!</p>
                @else
                    <p>Please <a href="{{ url('/login') }}">login</a> to start!</p>
                @endauth
            </div>
        </div>
    </body>
</html>
