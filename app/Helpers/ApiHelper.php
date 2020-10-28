<?php

function api_errors($returnCode, $message, $statusCode = 200)
{
    return response()->json([
        'code' => $returnCode,
        'message' => $message,
    ], $statusCode);
}

function api_success($data, $statusCode = 200)
{
    return response()->json(array_merge(['code' => 200], $data), $statusCode);
}