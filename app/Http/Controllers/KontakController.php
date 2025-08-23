<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class KontakController extends Controller
{
    function index()
    {
        return view('pages.kontak');
    }
}
