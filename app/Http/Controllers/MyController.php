<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function XinChao()
    {
        echo "Chao Cac Ban";
    }

    public function KhoaHoc($ten)
    {
        echo 'Khoa hoc: ' . $ten;

    }

    public function GetURL(Request $request)
    {
        return $request->path();
    }

    public function postForm(Request $request)
    {
        dd($request->all());
    }
}
