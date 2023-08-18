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
        'to_do_suggestions',
        'title',
        'body',
    ];
    
    public function user()
    {
        //return $this->belongsTo(User::class);
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
