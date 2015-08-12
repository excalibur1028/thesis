<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Application home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.index');
    }

        public function products()
    {
        return view('pages.products');
    }


}
