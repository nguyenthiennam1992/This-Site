<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Online  @yield('title')</title>
    <link href="{{ mix('css/admin/admin.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
    @section('sidebar')
    <div class="sidebar">
    <nav class="nav nav-admin">
        <ul class="top-menu">
            <li>
                <a href="#">Menu</a>
            </li>
            <li>
                <a href="#">Nav Item</a>
                <ul>
                    <li><a href="#">Subnav Item</a></li>
                    <li><a href="#">Subnav Item</a></li>
                    <li><a href="#">Subnav Item</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id='cssmenu'>
    <ul>
    <li><a href='#'>Home</a></li>
    <li class='active has-sub'><a href='#'>Products</a>
        <ul>
            <li class='has-sub'><a href='#'>Product 1</a>
                <ul>
                <li><a href='#'>Sub Product</a></li>
                <li><a href='#'>Sub Product</a></li>
                </ul>
            </li>
            <li class='has-sub'><a href='#'>Product 2</a>
                <ul>
                <li><a href='#'>Sub Product</a></li>
                <li><a href='#'>Sub Product</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href='#'>About</a></li>
    <li><a href='#'>Contact</a></li>
    </ul>
    </div>
    </div>
    
    @show

    <div class="container">
        @yield('content')
    </div>
    <script src="{{mix('js/admin/admin.js')}}" type="text/javascript"></script>
</body>
</html>