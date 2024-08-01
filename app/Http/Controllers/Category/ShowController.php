<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Feature\Category\ShowFeature;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(int $id)
    {
        return ShowFeature::dispatchSync(null, ['id' => $id]);
    }
}
