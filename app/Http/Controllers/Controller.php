<?php

namespace App\Http\Controllers;

use App\Http\Responses\Success;
use Symfony\Component\HttpFoundation\Response;

class Controller
                    // extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidateRequests

    protected function success($data, ?int $code = Response::HTTP_OK)
    {

        return new Success($data, $code);
    }
}
