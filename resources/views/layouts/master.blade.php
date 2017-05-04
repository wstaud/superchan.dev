<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SUPERchan</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css"/> 
    </head>
    <body>

    <nav class="topbar">
        <div class="leftMenu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/posts">All</a></li>
            </ul>
        </div>
        <div class="rightMenu">
            <ul>
                @if (Auth::check())
                <li><a href="/account">Account</a></li>
                @else
                <li><a href="/login">Login/Signup</a></li>
                @endif
            </ul>
        </div>
    </nav>


    @yield('content')
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
