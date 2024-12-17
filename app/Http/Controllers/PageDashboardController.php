<?php

namespace App\Http\Controllers;

class PageDashboardController extends Controller
{
    public function __invoke()
    {
        $purchasedCourses = auth()->user()->courses; //()->orderBy('')->get();

        return view('dashboard', compact('purchasedCourses'));
    }
}
