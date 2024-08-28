<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Ideas([
            'content'=>'test content',
        ]);
        $idea->save();


        return view('dashboard', ['ideas' => $idea]);
    }
}
