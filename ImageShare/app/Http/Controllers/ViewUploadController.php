<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class ViewUploadController extends Controller
{

    public function foreach_image()
    {
        $data = Photo::all();

        return view('dashboard', ['images' => $data]);
    }
}

?>
