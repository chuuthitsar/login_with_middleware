<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDeleteController extends Controller
{
    public function __invoke($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('admin.home');
    }
}
