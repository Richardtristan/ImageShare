<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ImageDetailController extends Controller
{


    public function details_image(Request $request)
    {
        $data = Photo::where('id', $request->id)->get();

        return view('details', ['details' => $data]);
    }


}
