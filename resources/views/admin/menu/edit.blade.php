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
       <div class="cotainer">
         <div class="row">
            <div class="col-md-8 mx-auto">
             <h1>Newmenu</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>menuの編集</h2>
                <form action="{{ action('Admin\MenuController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                     <div class="form-item">
                        <lable class="col-md-2" for="item">商品名</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="item" value="{{ $menu_form->item }}">
                        </div>
                    </div>
                        <div class="form-price">
                        <lable class="col-md-2" for="price">値段</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ $menu_form->price}}">
                        </div>
                    </div>
                    
                     <div class="form-allergy">
                        <lable class="col-md-2" for="allergy">アレルギー</lable>
                        <div class="col-md-10">
                            <input type="checkbox" name="allergy_egg" value="{{ $menu_form->allergy_egg}}">鶏卵
                            <input type="checkbox" name="allergy_milk" value="{{ $menu_form->allergy_milk}}">乳
                            <input type="checkbox" name="allergy_wheat" value="{{ $menu_form->allergy_wheat}}">小麦
                            <input type="checkbox" name="allergy_nuts" value="{{ $menu_form->allergy_nuts}}">ナッツ類
                           <input type="checkbox" name="allergy_fruit" value="{{ $menu_form->allergy_fruit}}">果物
                        </div>
                    </div>
                    
                    <div class="form-description">
                        <lable class="col-md-2" for="description">商品説明</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                    </div>
                  <div class="form-itemimage">
                        <label class="col-md-2" for="image">商品画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                             <div class="form-text text-info">設定中: {{$menu_form->image_path }}
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                      </label>
                  </div>
                        </div>
                    </div>
                    <div class="form-group row">
                     <div class="col-md-10">
                       <input type="hidden" name="id" value="{{$menu_form->id }}">

                    {{ csrf_field() }}
                    <input type="submit" class="btn-secondary" value="更新">
                    
                </form>
          </div>
        </div>
       </div>   
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>