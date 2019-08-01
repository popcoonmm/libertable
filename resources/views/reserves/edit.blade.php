<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
      <title>予約の編集</title>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  </head>   
   <body>
     <header>
       <div class="cotainer">
         <div class="row">
            <div class="col-md-8 mx-auto">
             <h1>Reservation</h1>
             </div>
          </div>
     </header>
    <div class="container">
        <div class="row">
           
                <h2>予約の編集</h2>
               
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
                             
                          <form action="{{ action('ReserveController@update',['id' =>$reserve->id]) }}" method="post" enctype="multipart/form-data">   
                           <tr>
                                    <td>{{ $reserve->id }}</td>
                                   <td>{{ $reserve->menu->item }}</td>
                                    <td>{{ $reserve->menu->price * $reserve->quantity  }}円</td>
                                   
                                    <td>
                                       <select name="quantity">
                          <option value="0">選択してください</option>
                           <?php
                                 for ($i = 1; $i <= 10; $i++){
                                 echo "<option value='{$i}'>{$i}</option>";
                                 }
                                 ?>
                    
                                    <td><img src="{{ $reserve->menu->image_path }}" width="50" height="50"></td>
                                      </select>
                             <td>
                              
                                <div>
                                  <a href="{{ action('ReserveController@delete', ['id' =>$reserve->id]) }}" role="button" class="btn-secondary">キャンセル</a>
                                </div>
                             </td>
                        
                           </tr>
                         </tbody>
                    </table>
                         {{ csrf_field() }}
                   <!--IDのタグをPOSTで一緒に送るためのタグ-->
                   <input type="hidden" name="menu_id" value="{{ $reserve->menu->id }}">
                   
                    <input type="submit"class="btn-secondary" value="更新">
                    
                  
                </form>
                <script type="text/javascript" >
                    $(function(){
                       $("select[name='quantity'] option[value='{{ $reserve->quantity }}']").attr("selected","selected");
                       
                    });
                    
                </script>
               </div>
            </div>
         </div>
     </div>
  </body>
</html>