<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Log_inController extends Controller
{
     public function index(User $user)
    {
        return $user->get();
    }
}
