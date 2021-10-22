<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image_upload()
    {
        return view('addImg');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload_post_image(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:1|max:20',
            'desc' => 'required|min:5|max:200'

        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        DB::table('photos')
            ->insert(
                ['nameUser' => Auth::user()->name, 'nameImg' => $imageName, 'title' => $request->title, 'desc' => $request->desc]
            );

        return back()->with('success','You have successfully upload image.');

    }
}

?>
