<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Todo extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'time_limit',
        'to_do_suggestions',
        'title',
        'body',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    
    public function article()   
    {
        return $this->hasOne(Article::class);  
    }
}
