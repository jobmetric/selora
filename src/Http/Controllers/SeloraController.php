<?php

namespace JobMetric\Selora\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class SeloraController extends Controller
{
    /**
     * index selora
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('selora::base.dashboard.title'));

        return view('selora::dashboard');
    }
}
