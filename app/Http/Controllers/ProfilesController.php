<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Validator;
use Storage;
class ProfilesController extends Controller
{
    public function _construct(){
        $this->middleware('auth')
            ->except('view_friend');
    }

    public function index($user_id){
        $profile=Profile::where('user_id','=',$user_id);
        if(!$profile)
            return view('profile.view_profile')
                ->withProfile($profile);
        else
            return view('profile.edit_details');
    }

    protected $rules = [
        'address'=>'required',
        'birthdate'=>'required|date',
        'prof_pic'=>'required'
    ];

    public function update(Request $req){
        $validator=Validator::make($req->all(), $this->rules);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $file_name=base64_encode($req->file('prof_pic')->getClientOriginalName());
        $file_extension=$req->file('prof_pic')->getClientOriginalExtension();
        //accepts 4 arguments
        //path, the file, your_filename, optional disk
        $path=$req->file('prof_pic') ->storeAs('public/avatars',
            $file_name.".".$file_extension);
        //save profile
        $profile=Profile::create([
            'address'=>$req->address,
            'birthdate'=>$req->birthdate,
            'prof_pic'=>$file_name.$file_extension,
            'user_id'=>$req->user()->id
        ]);
        $profile->save();
        return redirect()->route('profile', $req->user()->id);
    }
}