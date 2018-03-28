<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ContentController extends Controller
{
    public function content()
    {

        return View::make('/dashboard');
 }
}
