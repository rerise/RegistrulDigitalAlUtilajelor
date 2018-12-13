<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref semi-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container">
                <div class="title">
                    Operatori
                </div>

                <div>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Nume
                                </th>
                                <th>
                                    Detalii nivel de pregatire
                                </th>
                                <th>
                                    Nivel de pregatire
                                </th>
                                 <th>
                                    Contact
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($operators as $operator)
                                <tr>
                                    <td>{{ $operator->name }}</td>
                                    <td>{{ $operator->preparation_details }}</td>
                                    <td>{{ $operator->preparation_level_id }}</td>
                                    <td>{{ $operator->contact }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('operators.create')}}" class="btn btn-warning">
                       + Adaugă operator
                    </a>
                </div>
            </div>
        </div>
       <footer id="footer" class="footer">
            <div class="col-md-12">
                <div class="col-md-2 offset-md-5 text-center">

                <img src="{{asset('images/rerise_logo.jpg')}}" class="image image-responsive img img-thumbnail img-responsive">
            </div>
            <!-- </div> -->
            <!-- <div class="col-md-8"> -->

            <ul class="icons">
                <!-- <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li> -->
                <li><a target="_blank" href="https://web.facebook.com/ReRise.org/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/company/re-rise---the-seismic-risk-reduction-organization/" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <!-- <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li> -->
                <!-- <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li> -->
                <li><a target="_blank" href="mailto:office@rerise.org" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">
               &copy; Re:Rise. All rights reserved.</p>
           </div>
    </footer>

    </body>
</html>
