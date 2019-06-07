<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function company() {
        return view('contents.sections.Company');
    }

    public function services() {
        return view('contents.sections.Services');
    }

    public function contact() {
        return view('contents.sections.Contact');
    }
}
