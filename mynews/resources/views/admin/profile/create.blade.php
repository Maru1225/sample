
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'profile'を埋め込む --}}
@section('title', ' My profile ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Profile作成画面</h2>
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

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
                        <input type="file" class="form-control-file" name="user[avatar]" id="user_avatar" />
                    </div>
                    </div>
                  
                     
                  
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                   
                  
                  
                  
            
             <label class="form-check-label" for="gender">性別</label>
　　
            
            <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="gender"  value="male" {{ old('gender')==='male' ? 'checked' : ''}}>
             <label class="form-check-label" for="otoko" accesskey="m">男</label>
             
             <input class="form-check-input" type="radio" name="gender"  value="female" {{ old('gender')==='female' ? 'checked' : '' }}>
             <label class="form-check-label" for="onna" accesskey="f">女</label>
       
             
          
              <input class="form-check-input" type="radio" name="gender"  value="not known" {{ old('gender')==='not known' ? 'checked' : '' }}>
             <label class="form-check-label" for="fumei" accesskey="n">不明</label>
         
            <input class="form-check-input" type="radio" name="gender"  value="not applica" {{ old('gender')==='not applica' ? 'checked' : '' }}>
               <label class="form-check-label" for="tekiyoufuyou" accesskey="no">適用不要</label>
                  </div>
                
　　　
                                   
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="15">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                   
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
    