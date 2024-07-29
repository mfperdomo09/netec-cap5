<?php

namespace App\Http\Feature;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
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
     * Feature constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request = null)
    {
        $this->request = $request;
    }
}
