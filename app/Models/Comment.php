<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // doing this we could insert data into comment table
protected $fillable =['user_id','post_id','body'];

public function post(){
    return $this->belongsTo('App\Post');
}
// 2. comment belongs to a user as well

public function user(){
    return $this->belongsTo('App\User');
}

}
