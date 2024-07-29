<?php

namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DeleteFeature extends Feature
{
    public function handle()
    {
        $id = $this->getData()['id'];

        try {
            DB::beginTransaction();
            $category = Category::find($id);

            if (!$category) {
                return $this->response('Category not found', 404);
            }

            $category->delete();

            DB::commit();
            return $this->response('Category deleted successfully', 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->response([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
