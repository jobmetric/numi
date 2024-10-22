<?php

namespace JobMetric\Numi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class NumiController extends Controller
{
    /**
     * index numi
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('numi::base.dashboard.title'));

        return view('numi::dashboard');
    }
}
