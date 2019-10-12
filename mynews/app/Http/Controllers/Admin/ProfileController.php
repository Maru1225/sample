<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistory;

use Carbon\Carbon;

class ProfileController extends Controller
{
    
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);

      $profile = new Profile;
      $form = $request->all();
      
      if (isset($form['user_avatar'])) {
        $avatar_path = $request->file('user_avatar')->store('public/image');
        $profile->user_avatar_path = basename($avatar_path);
      } else {
          $profile->user_avatar_path = null;
      }

     
      unset($form['_token']);
  
      unset($form['user_avatar']);

   
      $profile->fill($form);
      $profile->save();   
        
        
        
        return redirect('admin/profile/create');
     }
     
public function index(Request $request)
  {
      $cond_hobby = $request->cond_hobby;
      if ($cond_hobby != '') {
        
          $posts = Profile::where('hobby', $cond_hobby)->get();
      } else {
        
          $posts = Profile::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_hobby' => $cond_hobby]);
  }
  
  
  public function edit(Request $request)
  {
      
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }
    public function update(Request $request)
  {
    
      $this->validate($request, Profile::$rules);
     
      $profile = Profile::find($request->id);
     
      $profile_form = $request->all();
      if (isset($profile_form['user_avatar'])) {
        $avatar_path = $request->file('user_avatar')->store('public/image');
        $profile->user_avatar_path = basename($avatar_path);
        
        unset($profile_form['user_avatar']);
      } elseif (isset($request->remove)) {
        $profile->user_avatar_path = null;
        unset($profile_form['remove']);
      }
      unset($profile_form['_token']);
      
      $profile->fill($profile_form)->save();
      
       $profile_history = new ProfileHistory;
        $profile_history ->profile_id = $profile->id;
        $profile_history ->edited_at = Carbon::now();
        $profile_history->save();

      return redirect('admin/profile');
  }
  
  public function delete(Request $request)
  {
     
      $profile = Profile::find($request->id);
      
      $profile->delete();
      return redirect('admin/profile');
  }  


}
