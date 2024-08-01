<?php
namespace App\Http\Feature\Category;

use App\Http\Feature\Feature;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class UpdateFeature extends Feature
{
    public function handle()
    {
        try {
            DB::beginTransaction();

            $id = $this->getData()['id'];

            $category = Category::find($id);

            if (!$category) {
                return $this->response('Category not found', 404);
            }

            $category->update($this->request->all());

            DB::commit();

            return $this->response($category, Response::HTTP_OK);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->response($e->getMessage(), 500);
        }
    }
}
