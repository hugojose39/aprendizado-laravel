<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('site.category.index');
    }

    public function show($slug): View
    {
        return view('site.category.show', ['slug' => $slug]);
    }
}
