@extends('layouts.app')
    <header>
      <div class="container">
          <h1 class="header-top">MENU</h1>
         <div class="header">
           <a href='reserves/index' class="reservation">予約リストへ</a>
           <a href='/' class="top">トップへ</a>
          </div>
        </div>
      </div>
    </header>
      <div class="menu-ground">
          @foreach($menus as $menu)
          <div class="container menu">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 border bg-primary">
          <div class="menu-image">
           @if ($menu->image_path)
            <img src="{{ secure_asset('storage/image/' . $menu->image_path) }}"class="aligncenter" style="width:100%;" />
           @endif
          </div> 
                    <div class="date">
                    {{ $menu->updated_at->format('Y年m月d日') }}
                    </div>
                    <div class="item">
                    {{ str_limit($menu->item, 150) }}
                    </div>
                    <div class="price">
                        <td>{{ str_limit($menu->price, 150) }}円</td>
                    </div>
                    <div class="allergy">
                        {{ str_limit($menu->allergy, 150) }}
                    </div>
                    <div class="description mt-3">
                        {{ str_limit($menu->description, 300) }}
                    </div>
               <form action="{{ action('ReserveController@create') }}" method="post" enctype="multipart/form-data">   
                      <div class="form-item">{{ $menu->quantity }}注文数</div>
                       <select name="quantity">
                          <option value="0">選択してください</option>
                            <?php
                                 for ($i = 1; $i <= 10; $i++){
                                 echo "<option value='{$i}'>{$i}</option>";
                                 }
                                 ?>
                       </select>
                   {{ csrf_field() }}
                   <!--IDのタグをPOSTで一緒に送るためのタグ-->
                   <input type="hidden" name="menu_id" value="{{$menu->id}}">
                    <input type="submit"class="btn-secondary" value="予約リストへ">
                  </form>
                </div>
            </div>
          @endforeach
      </div>
  <footer>
    <div class="container">
      <div class_="row">
          <a href='reserves/index' class="reservation">予約リストへ</a>
           <a href='/' class="top">トップへ</a>
                 <p> ---------------------------------- </p>

      <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Map</h5>
         <iframe src="https://maps.google.co.jp/maps?output=embed&q=渋谷駅"></iframe>
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>     
    </footer>
 @section('content')