<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $propiedadesPage['titleProduct'] }}</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/plugins/syntaxhighlighter/styles/shCoreDjango.css') }}" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">



</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        <!-- Navbar-->
        @include("template.navbar",[$data])
        <!-- Side-Nav-->
        @extends('template.Side-Nav')

        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <!-- Main content starts -->
                <div>
                    <!-- Row Starts -->
                    <div class="row">
                        <div class="col-sm-12 p-0">
                            <div class="main-header">
                                <h4>{{ $propiedadesPage['titleProduct'] }}</h4>
                                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                    <li class="breadcrumb-item"><a>{{ $propiedadesPage['titleProduct'] }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a>{{ $propiedadesPage['subtitle'] }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                    <div class="container">
                        <!-- Row start -->
                        <div class="row">
                            <!-- Form Control starts -->

                            <!-- Textual inputs starts -->
                            <div class="col align-self-center ">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Registrar {{ $propiedadesPage['titleProduct'] }}
                                        </h5>
                                    </div>

                                    <div class="card-block">
                                        <form method="POST"
                                            action="/Insertar/{{ $propiedadesPage['titleProduct'] }}">
                                            @csrf
                                            @method("POST")
                                            @foreach ($propiedades as $prop)

                                                <div class="form-group row">
                                                    <label for="form-{{ $loop->index }}"
                                                        class="col-xs-2 col-form-label form-control-label">{{ $prop }}</label>
                                                    <div class="col-sm-10">
                                                        <input name="{{ $name_propiedades[$loop->index] }}"
                                                            class="form-control" type="text"
                                                            id="form-{{ $loop->index }}">
                                                    </div>
                                                </div>
                                            @endforeach

                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-light m-r-30">¡Registrar!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs ends -->
                        </div>
                    </div>
                    <!-- Row end -->

                </div>
                <!-- Main content ends -->
            </div>
            <!-- Container-fluid ends -->
        </div>
    </div>


    <!-- Required Jqurey -->
    <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- waves effects.js -->
    <script src="{{ asset('assets/plugins/Waves/waves.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

    <!-- notification -->
    <script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

    <!-- Highliter js -->
    <script type="text/javascript" src="{{ asset('assets/plugins/syntaxhighlighter/scripts/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/plugins/syntaxhighlighter/scripts/shBrushXml.js') }}"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>
    <script src="{{ asset('assets/js/menu.min.js') }}"></script>
</body>

</html>
