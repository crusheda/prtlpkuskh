<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PortalController extends Controller
{
    function index()
    {
        $yearMonth = Carbon::now()->isoFormat('YYYY-MM-DD');

        $data = [
            'yearMonth' => $yearMonth,
        ];

        return view('pages.index')->with('list', $data);
    }
}
