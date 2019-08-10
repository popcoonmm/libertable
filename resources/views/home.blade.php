<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE HOUSE</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
   <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
  </head>
  <body>
   
    <div class="top">
        <h1>CAKE HOUSE<br></h1>
      
         <p><a href="house1" class="btn signup">house1</a>
         
           <a href="house2" class="btn signup">house2</a></p>
        </div>
  </body>
</html>