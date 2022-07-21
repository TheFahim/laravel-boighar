<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\donatebook;
use Illuminate\Http\Request;
use App\Http\Requests\DonatebookRequest;

class DonatebookController extends Controller
{
    public function create(){
        $banner=Banner::where('is_active',true)->where('option','Donate book')->latest()->first();
        return view('frontend.book_form.donatebook',compact('banner'));
    }

    public function store(DonatebookRequest $request){

        if($file=$request->file('bookimage')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/donatebook'),$filename);
        }
       donatebook::create([

        'fullname'=>$request->fullname,
        'email'=> $request->email,
        'address'=> $request->address,
        'mobile'=> $request->mobile,
        'booktitle'=>$request->booktitle ,
        'bookauthor'=> $request->bookauthor,
        'bookedition'=>$request->bookedition ,
        'bookquantity'=>$request->bookquantity,
        'bookimage'=>$filename,
       ]
       );
       return redirect()->route('donatebooks.create')->withMessage('Successfully submitted');
    }




    //Admin Sell Book

    public function index()
    {

        $donatebooks=donatebook::all();
        
        return view('backend.admindonatebook.index',compact('donatebooks'));
    }


        public function show($donatebook)
        {


         $donatebookshow=donatebook::findOrFail($donatebook);
         return view('backend.admindonatebook.show',compact('donatebookshow'));

         }



        public function edit(Request $request)
    {
          $donatebookedit=donatebook::findOrFail($request->donatebook);
          return view('backend.admindonatebook.edit',compact('donatebookedit'));
    }







        public function update(DonatebookRequest $request,$donatebook)
    {


          $donatebookupdate=donatebook::findOrFail($donatebook);
          $donatebookupdate->update([
            'fullname'=>$request->fullname,
            'email'=> $request->email,
            'address'=> $request->address,
            'mobile'=> $request->mobile,
            'booktitle'=>$request->booktitle ,
            'bookauthor'=> $request->bookauthor,
            'bookedition'=>$request->bookedition ,

           ]
           );
           return redirect()->route('donatebooks.index')->withMessage('Successfully updated');

    }

    public function destroy(Request $request)
    {
          $donatebookshow=donatebook::findOrFail($request->donatebook)->delete();
          return redirect()->route('donatebooks.index')->withMessage('Successfully Data Deleted');
    }

}
