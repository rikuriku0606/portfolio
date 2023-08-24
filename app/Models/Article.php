<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
    public function todo()   
    {
        return $this->belongsTo(Todo::class);  
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function tag_id()   
    {
        return $this->belongsTo(Tag::class);  
    }
    
    public function tag_article()   
    {
        return $this->hasMany(tag_article::class);  
    }
}
