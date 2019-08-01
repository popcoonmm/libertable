<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
      <title>予約一覧</title>
  </head>
   <body>
     <header>
       <div class="container">
        <div class="row">
          <h1 class="header-top">Reservation</h1>
          　<div class="col-md-4">
                <a href='/' role="button" class="btn-outline-dark";>MENU</a>
        　　</div>
           <!--<a href='reserves/index' class="reservation">予約リストへ</a>-->
        </div>
     </header>
         <div class="container">
                <div class="row">
                    <table class="table table-outline-secondary">
                        <thead>
                           <tr>
                                <th width="5%">ID</th>
                                <th width="15%">商品名</th>
                                <th width="15%">値段</th>
                                <th width="20%">注文数</th>
                                <th width="15%">商品詳細</th>
                                <th width="10%">商品画像</th>
                                <th eidth="20%">編集</th>
                            </tr>
                        </thead>
                        <tbody>
      <!--左が全てのデータ(複数系)からひとつ（単数形）だけ取り出す-->
       @foreach($reserves as $reserve)
                        <tr>
                     <th>{{ $reserve->menu_id }}</th>
                                    <td>{{ $reserve->menu->item }}</td>
                                    <td>{{ $reserve->menu->price * $reserve->quantity  }}円</td>
                                    <td>{{ $reserve->quantity }}</td>
                                <td>{{ str_limit($reserve->menu->description, 20) }}</td>
                                    <td><img src="{{ $reserve->menu->image_path }}" width="50" height="50"></td>
                                    
                         <td>
                            <div>
                                <a href="{{ action('ReserveController@edit', ['id' =>$reserve->id]) }}" role="button" class="btn-secondary">編集</a>
                            </div>
                            <div>
                                <a href="{{ action('ReserveController@delete', ['id' =>$reserve->id]) }}" role="button" class="btn-secondary">削除</a>
                                        </div>
                         </td>
                        
                    </tr>
          @endforeach
          </tbody>
          </table>
          </div>
          </div>
      </div>
   </body>
</html>
