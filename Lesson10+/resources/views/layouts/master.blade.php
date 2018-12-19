<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
</head>

<body>

        @include ('layouts.nav')

        <div class="container">

            <div class="row">

                <div class="col-md-9 pull-right">

                    <div class="card border-0">

                        @yield ('content')

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card">

                        @include ('layouts.sidebar')

                    </div>

                </div>

            </div>

        </div>

        @include('layouts.footer')


</body>
</html>
