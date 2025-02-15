<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $req)
    {
        if ($req->hasFile('upload')) {
            $file = $req->file('upload');
            $path = $file->store('public/upload');
            $url = Storage::url($path);

            return response()->json(['url' => $url]);
        }

        return response()->json(['error' => 'Upload failed'], 400);
    }
}
