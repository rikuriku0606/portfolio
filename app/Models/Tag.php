<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    
    
    public function todos()
    {
        return $this->belongsToMany(Todo::class);
    }
    
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    /*
    public function tag_todo()   
    {
        //return $this->belongsTo(Tag_todo::class);
        return $this->hasMany(Tag_todo::class);
    }
    
    public function tag_articles()   
    {
        return $this->hasMany(Tag_article::class);   
    }
    */
}
