<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\requestbook;
use Illuminate\Http\Request;
use App\Http\Requests\RequestbookRequest;
use Illuminate\Support\Facades\Validator;

class RequestbookController extends Controller
{

public function create(){
    $banner=Banner::where('is_active',true)->where('option','Request book')->latest()->first();
    return view('frontend.book_form.requestbook',compact('banner'));
}

public function store(RequestbookRequest $request){
    if($file=$request->file('bookimage')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/requestbooks'),$filename);
    }

   requestbook::create([
          'booktitle'=>$request->booktitle,
          'bookauthor'=>$request->bookauthor,
          'bookedition'=>$request->bookedition,
          'bookquantity'=>$request->bookquantity,
          'price'=>$request->price,
          'mobile'=>$request->mobile,
          'address'=>$request->address,
          'bookimage'=>$filename??'',

   ]
   );
   return redirect()->route('requestbooks.create')->withMessage('Successfully submitted');
}




//Admin Sell Book

public function index()
{



    $requestbooklist=requestbook::paginate(2);
    return view('backend.adminrequestbook.requestbooklist',compact('requestbooklist'));

}


    public function show($requestbook)
    {


     $requestbookshow=requestbook::findOrFail($requestbook);
     return view('backend.adminrequestbook.show',compact('requestbookshow'));

     }



    public function edit($requestbook)
{
      $requestbookedit=requestbook::findOrFail($requestbook);
      return view('backend.adminrequestbook.edit',compact('requestbookedit'));
}

    public function update(RequestbookRequest $request,$requestbook)
{
      $requestbookupdate=requestbook::findOrFail($requestbook);
      $requestbookupdate->update([
        'booktitle'=>$request->booktitle,
          'bookauthor'=>$request->bookauthor,
          'bookedition'=>$request->bookedition,
          'bookquantity'=>$request->bookquantity,
          'price'=>$request->price,
          'mobile'=>$request->mobile,
          'address'=>$request->address,
       ]
       );
       return redirect()->route('requestbooks.index')->withMessage('Successfully updated');

}

public function destroy($requestbook)
{
      $requestbookshow=requestbook::findOrFail($requestbook)->delete();
      return redirect()->route('requestbooks.index')->withMessage('Successfully Data Deleted');
}


}
