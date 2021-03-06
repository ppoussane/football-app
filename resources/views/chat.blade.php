<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <div id="app">
              <div class="container">
                     <div class="panel">
                            <div class="panel-heading">
                                   <p>Messages</p>
                            </div>
                            <div class="panel-body">
                                   <chat></chat>
                            </div>
                     </div>
              </div>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
</body>


