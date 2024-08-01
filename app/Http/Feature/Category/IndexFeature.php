<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Http\Resources\Category\IndexResource;
use App\Models\Category;

class IndexFeature extends Feature
{
    public function handle()
    {
        $categories = Category::paginate(10);

        return response(new IndexResource($categories), 200);
    }
}
