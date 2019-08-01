<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
      <title>メニュー編集</title>
  </head>
    <body>
       <header>
         <div class="container">
           <div class="row">
            <h1 class="header-logo">Menu</h1>
           </div>
         </div>
       </header>
     <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\MenuController@add') }}" role="button" class="btn-outline-dark";>Newmenu</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\MenuController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">商品名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_item" value="{{ $cond_item }}">
                        </div>
                        <!--$cond_item = Product::where('title', 'like', '%keyword%')->get();-->

                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn-secondary " value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-menu col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-outline-secondary">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">商品名</th>
                                <th width="15%">値段</th>
                                <th width="20%">アレルギー</th>
                                <th width="20%">商品紹介</th>
                                <th width="10%">商品画像</th>
                                <th eidth="20%">編集</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $menu)
                                <tr>
                                    <th>{{ $menu->id }}</th>
                                    <td>{{ str_limit($menu->item, 10) }}</td>
                                    <td>{{ str_limit($menu->price, 10) }}</td>
                                    <td>
                                      <span>{{ $menu->allergies() }}</span>
                                    </td>
                                    <td>{{ str_limit($menu->description, 20) }}</td>
                                    <td><img src="{{ $menu->image_path }}" width="50" height="50"></td>
                                    
                         <td>
                            <div>
                                <a href="{{ action('Admin\MenuController@edit', ['id' => $menu->id]) }}" role="button" class="btn-secondary">編集</a>
                            </div>
                            <div>
                                <a href="{{ action('Admin\MenuController@delete', ['id' => $menu->id]) }}" role="button" class="btn-secondary">削除</a>
                                        </div>
                         </td>
                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>