<!DOCTYPE html>
<html lang="en-PH">
<head>
<meta charset="utf-8">
<title>Expense Tracking App</title>

<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/angular-csp.css') }}" />
</head>
<body data-ng-app="app">

{{--<nav class="navbar navbar-fixed-top navbar-default">--}}
  {{--<div class="container">--}}
    {{--<div class="navbar-header">--}}
      {{--<a href="/" class="navbar-brand">Expense Tracking App</a>--}}
      {{--<button class="navbar-toggle">--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
      {{--</button>--}}
    {{--</div>--}}
    {{--<div class="navbar-collapse collapse">--}}
      {{--<div class="navbar-right">--}}
        {{--<ul class="navbar-nav nav">--}}
          {{--<li>--}}
            {{--<a href="#"><i class="glyphicon glyphicon-plus"></i> Add</a>--}}
          {{--</li>--}}
        {{--</ul>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</nav>--}}

<div>
  @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
