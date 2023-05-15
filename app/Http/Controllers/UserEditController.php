<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function __invoke($id)
    {
        $user = User::find($id);
        return view('user-edit',compact('user'));
    }
}
