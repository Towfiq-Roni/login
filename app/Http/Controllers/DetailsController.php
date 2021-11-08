<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

class DetailsController extends User{
    public function details(){
        return view('details');
    }
}
?>
