<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\DcComic;
use Illuminate\Http\Request;

class DcComicController extends Controller
{
    public function index()
    {
        $comics = DcComic::All();
        return view('welcome', compact('comics'));
    }
}
