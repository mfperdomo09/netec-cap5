<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;

class StoreFeature extends Feature
{
    public function handle()
    {
        $category = Category::create($this->request->all());

        if (!$category) {
            return response()->json(['message' => 'Failed to store category'], 500);
        }

        return response()->json($category, 201);
    }
}
