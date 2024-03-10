<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class UploadController extends Controller
{
    // public function store(Request $request){
    //     if($request->hasFile("image")){
    //         $files = $request->file('image');
    //         $filename = uniqid().$file->getClientOriginalExtension();
    //         $folder = uniqid().'-'.now()->timestamp;
    //         $file->storeAs('images/tmp/'.$folder,$filename);

    //         TemporaryFile::create([
    //             'folder' => $folder,
    //             'filename' => $filename
    //         ]);
    //         return $folder;
    //     }
    //     return '';
    // }

    public function store(Request $request)
{
    if ($request->hasFile("thumb")) {
        $files = $request->file('thumb');

        $folder = uniqid() . '-' . now()->timestamp;

        foreach ($files as $file) {
            $filename = uniqid() .'.'. $file->getClientOriginalExtension();
            $file->storeAs('images/tmp/' . $folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);
        }
        return $folder;
    }
    return '';
}


    public function delete(){
        //
    }
}
