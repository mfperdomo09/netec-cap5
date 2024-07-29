<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;

class ShowFeature extends Feature
{
    public function handle()
    {
        $id = $this->getData()['id'];
        $category = Category::find($id);

        if (!$category) {
            return $this->response('Category not found', 404);
        }

        return response()->json($category, 200);
    }
}
