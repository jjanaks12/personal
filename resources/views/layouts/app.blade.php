<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JanakStha :: dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100italic,100,200,200italic,300,300italic,500,400italic,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    @include('partials._stylesheet')
    
    @include('partials._javascript')
</head>
<body>
    <div id="wrapper">
        @include('partials._navbar')
        <main id="main" role="main">
            <div id="twocolumns">
                @include('partials._sidebar')
                <div id="content" class="jcf-scrollable">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>