<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hisfa Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="/js/hisfa.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">

        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />

                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <div class="profile-info">
                        <img class="settingsiconwhite" src="images/settingswhite.svg" alt="settings_wastesilo's">
                        <img src="uploads/{{Auth::user()->img}}" alt="profile image" class="profile-picture" >
                        <p class="profilename" >{{Auth::user()->name}}</p>
                    </div>
                    @if (Auth::user()->hasRole('admin'))
                    <div class="darkdiv"><a href="roles/create"><li><i class="material-icons">&#xE7FE;</i>Add user</li></a></div>
                    @endif
                    <div class="lightdiv"><a href="profile"><li><i class="material-icons">&#xE8A6;</i> Profile</li></a></div>
                    <div class="darkdiv">
                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <li><i class="material-icons">&#xE879;</i> Logout</li>
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" ">
                            {{ csrf_field() }}
                        </form>
                    </div>

                </ul>
            </div>
        </nav>
        <div class="headertext">Dashboard</div>
        @yield('dashboardbar')
    </div>

    <div>
        @yield('content')
    </div>
    
  


</body>
</html>
