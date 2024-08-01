<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class ShowFeature extends Feature
{
    public function handle()
    {
        $id = $this->getData()['id'];
        $category = Category::find($id);

        if (!$category) {
            return $this->response('Category not found', Response::HTTP_NOT_FOUND);
        }

        return $this->response($category, Response::HTTP_OK);
    }
}
