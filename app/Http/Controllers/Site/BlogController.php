<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('site.blog.index');
    }
}
