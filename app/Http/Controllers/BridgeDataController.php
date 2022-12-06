<?php

namespace App\Http\Controllers;

use App\Models\BridgeData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BridgeDataController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function chartAjax(){
        return BridgeData::query()->orderBy('id', 'DESC')->take(10)->get();
    }

    public function deviceData()
    {
        BridgeData::create([
            ''
        ]);

        echo "data added";
    }
}
