<?php

namespace App\Http\Controllers\v1;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success( string  $message,$data = null)
    {
        return response()->json([
            'status' => 'success',
            'success' => true,
            'message' => $message ?? 'operation successfully',
            'data' => $data
        ]);

    }


    public function error( string  $message, array $data = null)
    {
        return response()->json([
            'status' => 'error',
            'success' => false,
            'message' => $message ?? 'error occured',
            'data' => $data
        ]);

    }
}
