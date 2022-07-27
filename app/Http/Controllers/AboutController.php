<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutAll = About::orderBy('id', 'desc')->get();
        $abouts = About::latest()->paginate(6);
        return view('backend.abouts.index',compact('abouts'));
    }

    public function create()
    {
        return view('backend.abouts.create');
    }

    public function store(Request $request,)
    {
    //    dd($_FILES);

    // return $request->file('image');
    if($file = $request->file('image')){
        $filename = date('dmY').time().'.'.$file->getClientOriginalExtension();
        // return $filename;
        $file->move(storage_path('app/public/aboutus'),$filename);
    }
        About::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$filename ?? '', 
        ]
       );
         
        
         
        return redirect()->route('abouts.index')->withMessage('Successfully Created');
    }    




    public function show($aboutId)
    {  
     $abouts=About::findOrFail($aboutId);
     return view('frontend.more_page.aboutus',compact('abouts'));  
    }

    public function edit($aboutId) {
        $about = About::findOrFail($aboutId);
        return view('backend.abouts.edit', compact('about'));
    }

    public function update(Request $request, $aboutId) {
        
        if($file=$request->file('image')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/aboutus'),$filename);
        }
        $about = About::findOrFail($aboutId);
        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename ?? $about->image
        ]);
        return redirect()->route('abouts.index')->withMessage('Successfully Updated');
    }

    public function destroy($aboutId) {
        $about = About::findOrFail($aboutId);
        $about->delete();
        return redirect()->route('abouts.index')->withMessage('Successfully Deleted');
    }
    public function aboutus(){
        $abouts = About::latest()->take(4)->get();
        return view('frontend.more_page.aboutus',compact('abouts'));
    }
}


