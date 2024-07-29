<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Feature\Category\IndexFeature;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return IndexFeature::dispatchSync();
    }
}
