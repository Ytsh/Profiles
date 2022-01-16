<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'fname', 'email', 'lname', 'address2','state','post','address1','phone','user_id','country','education','region','area'];
   
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
