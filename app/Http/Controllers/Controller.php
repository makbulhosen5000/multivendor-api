<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="multivendor API",
 *     description="multivendor API info",
 *     @OA\Contact(name="Swagger API Team")
 * )
 * 
 *  @OA\PathItem(
 *     path="/api/v1",
 *     description="Example path",
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
