<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    public function index()
    {
        $headers = Header::whereNull('parent_id')
            ->with('sub_header')
            ->get();
        
        return view('header', compact('headers'));
    }
}
