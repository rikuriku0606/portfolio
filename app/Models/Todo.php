<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function article()   
    {
        return $this->hasOne(Article::class);  
    }
    
    public function tag_todos()   
    {
        return $this->hasMany(Tag_todo::class);
    }
}
