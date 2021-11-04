<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

class AboutController extends User{
    public function about(){
        return view('about');
    }
}
?>
