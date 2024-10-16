<?php

namespace JobMetric\Numi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NumiController extends Controller
{
    /**
     * index numi
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('numi::index');
    }
}
