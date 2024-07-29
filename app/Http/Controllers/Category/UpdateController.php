<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Feature\Category\UpdateFeature;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id)
    {
        return UpdateFeature::dispatchSync($request, ['id' => $id]);
    }
}
