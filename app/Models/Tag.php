<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    public function tag_todos()   
    {
        return $this->hasMany(Tag_todo::class);  
    }
    
    public function tag_articles()   
    {
        return $this->hasMany(Tag_article::class);  
    }
}
