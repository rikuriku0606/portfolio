<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
     public function index(Tag $Tag)
    {
        return $Tag->get();
    }
}
