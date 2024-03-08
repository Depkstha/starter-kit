<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class UploadController extends Controller
{
    public function store(Request $request){
        if($request->hasFile("image")){
            $file = $request->file('image');
            $filename = uniqid().$file->getClientOriginalExtension();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('images/tmp'.$folder,$filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);
            return $folder;
        }
        return '';
    }

    public function delete(){
        //
    }
}
