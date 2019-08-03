@extends('layouts.house')
@section('title', '予約一覧')
@section('content')
       <header>
      <div class="container">
           <a href='/' class="home">CAKE HOUSE</a>
           <a href='/house1' class="house1">トップへ</a>
      </div>
              
<div class="container-fluid col-md-6 mx-auto col-10">
  <h1 class="header-top" >Reservation</h1>
  </header>
         <div class="container">
                <div class="row">
                    <table class="table table-outline-secondary">
                        <thead>
                           <tr>
                                <th width="15%">商品名</th>
                                <th width="15%">単価</th>
                                <th width="15%">注文数</th>
                                <th width="15%">小計</th>
                                <th width="15%">商品詳細</th>
                                <th width="10%">商品画像</th>
                                <th eidth="20%">編集</th>
                            </tr>
                        </thead>
                        <tbody>
      <!--左が全てのデータ(複数系)からひとつ（単数形）だけ取り出す-->
       @foreach($reserves as $reserve)
                        <tr>
                                    <td>{{ $reserve->menu->item }}</td>
                                     <td>{{ $reserve->menu->price }}円</td>
                                    <td>{{ $reserve->quantity }}</td>
                                    <td>{{ $reserve->menu->price * $reserve->quantity  }}円</td>
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
          <div class="container-fluid col-md-6 mx-auto col-10">
                  
           <input type="hidden" name="menu_id" value="{{ $reserve->menu->id }}">
                   
                    <input type="submit"class="btn-secondary" value="予約する">
                      
          </div>
          </div>
          </div>
      </div>
@endsection