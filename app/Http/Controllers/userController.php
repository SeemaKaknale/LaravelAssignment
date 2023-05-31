<?php

namespace App\Http\Controllers;
use App\Models\phoneData;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function fetchData()
    {
        $data = phoneData::all();
        return response()->json([
            "status" => "Successful",
            "data" => $data,
        ]);
    }
}
