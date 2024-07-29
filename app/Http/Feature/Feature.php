<?php

namespace App\Http\Feature;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Queue\{SerializesModels, InteractsWithQueue};

/**
 * Class Feature
 *
 * @package App\Foundation\Features
 */
class Feature
{
    use Queueable,
        Dispatchable,
        SerializesModels,
        InteractsWithQueue;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var array
     */
    protected $data;

    /**
     * Feature constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request = null, $data = [])
    {
        $this->request = $request;
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * Generate a response.
     *
     * @param mixed $data
     * @param int $status
     * @return JsonResponse
     */
    public function response($data, int $status = 200): JsonResponse
    {
        if ($data instanceof JsonResource) {
            return $data->response()->setStatusCode($status);
        }

        if ($data instanceof ResourceCollection) {
            return $data->response()->setStatusCode($status);
        }

        return response()->json(['message' => $data], $status);
    }
}
