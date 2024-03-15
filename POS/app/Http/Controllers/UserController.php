<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('user')
            ->with('idUser', '02133')
            ->with('namaUser', 'Moh. Samsul Hadi');
    }
}
