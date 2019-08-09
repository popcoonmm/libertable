<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
   <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
  </head>
  <body>
   
    <div class="top-wrapper">
    <header>
      
      
    </header>
      <div class="container">
        <h1>CAKE HOUSE</h1>
       
        <div class="btn-wrapper">
          <a href="house1" class="btn signup">house1</a>
          <div class="btn-wrapper">
           <a href="house2" class="btn signup">house2</a>
          </div>
         </div>
       </div>
      </div>
    </div>
  </body>
</html>