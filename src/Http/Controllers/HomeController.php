<?php

namespace JobMetric\Selora\Http\Controllers;

use Illuminate\Contracts\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Home Page
     *
     * @return View
     */
    public function home(): View
    {
        return view('selora::website.home');
    }
}
