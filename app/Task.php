<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
     
    protected $fillable = ['content','status'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
