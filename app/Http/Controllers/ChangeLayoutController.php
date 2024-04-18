<?php

namespace App\Http\Controllers;

class ChangeLayoutController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function materials()
    {
        return MaterialsController::class->index();
    }

    public function makeOrder()
    {
        return ;
    }

    public function calculation()
    {
        return view('pages.calculation');
    }

    public function mainPage()
    {
        return view('pages.main');
    }
}
