<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_todo extends Model
{
    use HasFactory;
    
    public function tag_id()   
    {
        return $this->belongTo(Tag::class);  
    }
    
    public function todo()   
    {
        return $this->belongTo(Todo::class);  
    }
}
