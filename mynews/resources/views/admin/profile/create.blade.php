
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'profile'を埋め込む --}}
@section('title', ' My profile ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>profile作成画面</h2>
            </div>
        </div>
    </div>
@endsection