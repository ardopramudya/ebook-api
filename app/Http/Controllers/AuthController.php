<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118034',
                'name' => 'Bernardo Pramudya Ananta',
                'gender' => 'Laki-laki',
                'phone' => '+ 62 88225419038',
                'class' => 'XII RPL 1'];
    }
}
