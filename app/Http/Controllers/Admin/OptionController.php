<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class OptionController extends Controller
{
    public function store(Request $request){
        $options = $request->all();
        if($request->has('my_image') && $request->file('my_image')->isValid()){
            $image = $request->file('my_image');
            $folder = '/uploads/images';
            $name = $this->uploadOne($image,$folder);
            $options['my_image'] = $name;
        }
        foreach ($options as $optionKey => $optionValue){
            if (is_null($optionValue)){
                option()->remove($optionKey);
                continue;
            }
            option([$optionKey => $optionValue]);
        }
        return back()->with('success','با موفقیت ثبت شد');
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);
        $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);
        return $name . '.' . $uploadedFile->getClientOriginalExtension();
    }
}
