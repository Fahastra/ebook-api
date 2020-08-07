<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118061',
                'name' => 'Farrassyah Handa Saputra',
                'gender' => 'Laki - laki',
                'phone' => '+62 812-2808-1552',
                'class' => 'XII RPL 2'];
    }
}
