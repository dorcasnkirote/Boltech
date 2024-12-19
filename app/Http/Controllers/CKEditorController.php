<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $url = asset('uploads/' . $fileName);
            return response()->json(['url' => $url]);
        }

        return response()->json(['error' => 'No file uploaded.'], 400);
    }




    public function browser(Request $request)
    {
        // Handle the image browser logic here, or forward the request to an appropriate method
        return response()->json([
            'uploadedImages' => [], // Example response, modify as needed
        ]);

    }



}
