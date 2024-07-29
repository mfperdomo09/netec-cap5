<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class StoreFeature extends Feature
{
    public function handle()
    {
        $category = Category::create($this->request->all());

        if (!$category) {
            return response()->json(['message' => 'Failed to store category'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json($category, Response::HTTP_CREATED);
    }
}
