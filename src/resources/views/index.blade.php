@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
        1.【管理画面】
@section('content')

    <div class="orderly-form__content">
      <div class="orderly-form__heading">
        <h2>PiGLy</h2>
      </div>

      <form class="form" action="/contacts/create" method="post">
        @csrf

        
  
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->

            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__input--text">
              <input type="date" name="calendar" placeholder="
              年/月/日" value="{{ old('date') }}"/>〜
            
              <input type="date" name="calendar" placeholder="
              年/月/日" value="{{ old('date') }}"/>
         <body>
          
            <td><button>検索</button></td>
            <td><button>データ作成</button></td>
          
      <div class="form__group">     
      <tr class="admin__row">
        <th class="admin__label">日付</th>
        <td><th class="admin__label">体重</th></td>
        <th class="admin__label">消費摂取カロリー</th>
        <th class="admin__label">運動時間</th>
        <th class="admin__label"></th>
      </tr>
      
  
         </body>
      </div>
      

         
        
         
@endsection