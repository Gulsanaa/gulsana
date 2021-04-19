<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function index(){
        return view('project');
    }
    function upload(Request $request){
        echo 'Here for upload  file';
    }

}
