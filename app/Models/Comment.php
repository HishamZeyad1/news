<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content' , 'date_written' , 'user_id' , 'post_id'
    ];

    public function post(){
        return $this->belongsTo( Post::class );
    }
    public function user(){
        return $this->belongsTo( User::class );
    }

}