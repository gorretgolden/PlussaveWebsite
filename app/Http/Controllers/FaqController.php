<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        return view('pages.faqs');
    }
}
