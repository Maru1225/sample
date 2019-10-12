
@extends('layouts.profile')

@section('title', 'profileの編集 ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Profile編集画面</h2>
                 <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="user_avatar">アバター</label>
                        <div class="col-md-10">
                        <input type="file" class="form-control-file" name="user_avatar" id="user_avatar" >
                        <div class="form-text text-info">
                                設定中: {{ $profile_form->user_avatar_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除</label>
                    </div>
                    </div>
                  </div>
                     
                  
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name  }}">
                        </div>
                    </div>
                   
                  
                  
                  
            
             <label class="form-check-label" for="gender">性別</label>
　　
            
            <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="gender"  value="male" {{ $profile_form->gender==='male' ? 'checked' : ''}}>
             <label class="form-check-label" for="otoko" accesskey="m">男</label>
             
             <input class="form-check-input" type="radio" name="gender"  value="female" {{ $profile_form->gender==='female' ? 'checked' : '' }}>
             <label class="form-check-label" for="onna" accesskey="f">女</label>
       
             
          
              <input class="form-check-input" type="radio" name="gender"  value="not known" {{ $profile_form->gender==='not known' ? 'checked' : '' }}>
             <label class="form-check-label" for="fumei" accesskey="n">不明</label>
         
            <input class="form-check-input" type="radio" name="gender"  value="not applica" {{ $profile_form->gender==='not applica' ? 'checked' : '' }}>
               <label class="form-check-label" for="tekiyoufuyou" accesskey="no">適用不要</label>
                  </div>
                
　　　
                                   
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ $profile_form->hobby }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="15">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                     {{ csrf_field() }}
                    
                    
                    <input type="submit" class="btn btn-primary" value="変更">
                    </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>更新履歴</h2>
                          <ul class="list-group">
                            @if ($profile_form->profilehistories != NULL)
                                @foreach ($profile_form->profilehistories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    