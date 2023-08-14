<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_article extends Model
{
    use HasFactory;
    
    public function tag_id()   
    {
        return $this->belongTo(Tag::class);  
    }
    
    public function article()   
    {
        return $this->belongTo(Article::class);  
    }
}
