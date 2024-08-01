<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Feature\Category\DeleteFeature;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(int $id)
    {
        return DeleteFeature::dispatchSync(null, ['id' => $id]);
    }
}
