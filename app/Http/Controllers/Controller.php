<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    public function index()
    {
        
        $data = [];
        $data["rnd"] = (rand(1, 15));
        $data["ip"] = gethostbyname(gethostname());
        return view('image')->with("data",$data);

    }
}
