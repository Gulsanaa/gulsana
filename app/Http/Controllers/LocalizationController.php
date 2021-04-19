<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function project($locale)
    {
        App::setLocale($locale);
       return view("project");
    }
}
