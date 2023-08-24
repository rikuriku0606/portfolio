<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tag_id',
        'article_id',
    ];
    
    public function tags()   
    {
        return $this->belongsTo(Tag::class);  
    }
    
    public function article()   
    {
        return $this->belongsTo(Article::class);  
    }
}
