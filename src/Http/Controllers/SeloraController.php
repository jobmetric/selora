<?php

namespace JobMetric\Selora\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SeloraController extends Controller
{
    /**
     * index selora
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('selora::index');
    }
}
