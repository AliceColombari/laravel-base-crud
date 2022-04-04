<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <!-- dati Flash presi in documentazione -->
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    {{-- validazione lato server se ci sono problemi di compilazione --}}
    @if ($errors->any())
        <div class="aler alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>