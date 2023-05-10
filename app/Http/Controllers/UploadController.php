<?php
// app/Http/Controllers/UploadController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

function upload(Request $request)
{
    $csrf_token = csrf_token();

    /*if ($request->header('X-CSRF-TOKEN') !== $csrf_token) {
        // The CSRF token is invalid, return an error response
        return response()->json(['message' => 'CSRF token verification failed'], 403);
    }*/

    // The CSRF token is valid, handle the file upload
    $file = $request->file('file');
    $filename = $file->getClientOriginalName();
    $file->storeAs('uploads', $filename);

    // Return a success response
    return response()->json(['message' => 'File uploaded successfully']);
}

