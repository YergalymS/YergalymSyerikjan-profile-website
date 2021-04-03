<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class UploadController extends Controller
{
    public function index() {
        $form = Form::all();

        return view('form.index')->with(['forms' => $form]);
    }

    public function uploadform() {
        return view('form.upload');
    }
    public function uploadsubmit(Request $request) {

        $this->validate($request, [
            'photos' => 'required',
        ]);
        if(true) {
            $file = $request->file('photos');
            // $filename = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            // $check=in_array($extension);
            // dd($check);
            
            if(true) {
                $items = Form::create($request->all());
                dd(20);
                foreach ($request->photos as $photo) {
                    $filename = $photo->store('photos');
                    Form::create([
                        'name' => $request->name,
                        'surname' => $request->surname,
                        'email' => $request->email,
                        'filename' => $request->filename
                    ]);
                }
                echo "Upload Successfully";
    
            } else {
                echo "Alert";
            }
            
        }
        return back();
    }
}
