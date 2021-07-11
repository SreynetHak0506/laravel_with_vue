<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
       protected $fillable = [
      'title',
      'description',
      'user_id'
  ];
  protected $primaryKey = 'p_id';

     // posts belongs to one user
   public function user(){
    return $this->belongsTo('App\User');
  }

   public function comments(){
    return $this->hasMany('App\Comment');
   } 
}
