@extends('layouts.profilefront')
@section('title', ' My profile ')
@section('content')
    <div class="container">
        
         <div class="row"> 
          <div class="col-md-12 ">
       <div class="card">
          <div class="image mx-auto">
                                @if ($posts->user_avatar_path)
                                    <img src="{{ asset('storage/image/' . $posts->user_avatar_path) }}">
                                @else
                                <img src="storage/image/noimage.png">

                                @endif
                            </div>
                             <div class="content">
                                 <p class="main text-center mt-4">{{ $posts->name }}</p>
                                </div>
          <hr color="#c0c0c0">
          
     
     <div class="content">
         <div class="mx-4">
         <p class ="main">性別</p>
         <p class="body mx-auto">{{ $posts->gender }}</p>
          </div>
     <hr color="#c0c0c0">   
     
     <div class="content">
        <div class="mx-4"> 
       <p class="main">趣味</p>  
       <p class="body mx-auto">{{ $posts->hobby }}</p>
       </div>
     
    <hr color="#c0c0c0">   
       <div class="content">
           <div class="mx-4">
       <p class=" main ">自己紹介</p>  
       <p class="body mx-auto">{{ $posts->introduction }}</p>
      </div>
      </div>
                                
     <hr color="#c0c0c0">                          
</div>
 </div>
  </div>
  </div>
 </div>      
 </div>  
                            
   
@endsection