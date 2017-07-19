<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Humber Holiday Homes</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/modern-business.css') }}" />

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarcollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Humber Holiday Homes</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarcollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/stock">Stock</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Stuff</a>
                            </li>
                            <li>
                                <a href="#">More Stuff</a>
                            </li>
                            <li>
                                <a href="#">Even More Stuff</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>  
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Humber Holiday Homes 2017, All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js')}}" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js')}}" ></script>

    <script src="{{ asset('js/modal.js')}}"></script>

</body>

</html>
