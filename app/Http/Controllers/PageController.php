<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function home(): Response
    {
        return Inertia::render('Home', [
            'locale' => app()->getLocale(),
        ]);
    }

    public function about(): Response
    {
        return Inertia::render('About', [
            'locale' => app()->getLocale(),
        ]);
    }

    public function services(): Response
    {
        return Inertia::render('Services', [
            'locale' => app()->getLocale(),
        ]);
    }

    public function projects(): Response
    {
        return Inertia::render('Projects', [
            'locale' => app()->getLocale(),
        ]);
    }

    public function contact(): Response
    {
        return Inertia::render('Contact', [
            'locale' => app()->getLocale(),
        ]);
    }
}
