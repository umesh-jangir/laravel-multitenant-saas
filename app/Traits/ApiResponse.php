<?php
namespace App\Traits;

trait ApiResponse {
    public function success($data) {
        return response()->json(['data' => $data], 200);
    }
}
