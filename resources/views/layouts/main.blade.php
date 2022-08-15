<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <nav>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about.index')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.post.index')}}">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Site Pattern</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
      </span>
                        </div>
                    </div>
                </nav>
            </nav>
        </div>
        @yield('content')
</div>
</body>
</html>
