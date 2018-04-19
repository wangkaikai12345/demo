<?php

//
//namespace App\Http\Controllers\Api;
//
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
//
//class TestController extends Controller
//{
//    //
//}

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store()
    {
        return $this->response->array(['test_message' => 'store TEST']);
    }

    public function index(Request $request)
    {
        return $this->response->array(['code' => $request->code]);
    }
}