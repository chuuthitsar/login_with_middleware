<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke($id,Request $request)
    {
        $user = User::find($id);
        $user->name = $request->nametxt;
        $user->email = $request->emailtxt;
        $user->update();
        return redirect()->route('admin.home');
        
    }
}
