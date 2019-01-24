<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;
class Profile extends Model
{
    protected $fillable = ['birthdate', 'prof_pic', 'address','user_id'];
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
    //return age
    public function getBirthdateAttribute($value){
        $date=Carbon::now();
        return $date->diffInYears($value);
    }

}