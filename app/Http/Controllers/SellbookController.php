<?php

namespace App\Http\Controllers;
use App\Http\Requests\SellbookRequest;
use Illuminate\Http\Request;
use App\Models\sellbook;
use Illuminate\Support\Facades\Validator;
class SellbookController extends Controller
{  
    public function create(){
    return view('frontend.book_form.sellbook');
}
public function store(SellbookRequest $request){
           
    if($file=$request->file('bookimage')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/sellbooks'),$filename);
    }     
    
   sellbook::create([
    'booktitle'=>$request->booktitle,
    'bookauthor'=>$request->bookauthor,
    'bookedition'=>$request->bookedition,
    'bookquantity'=>$request->bookquantity,
    'mobile'=>$request->mobile,
    'price'=>$request->price,
    'bookimage'=>$filename??'',
   ]
   );
   return redirect()->route('sellbooks.create')->withMessage('Successfully submitted');
}




//Admin Sell Book

public function index()
{
  

    $this->authorize('sellbook');
    $sellbooks=sellbook::all();
    return view('backend.adminsellbook.index',compact('sellbooks'));
}


    public function show($sellbook)
    {
     $sellbookshow=sellbook::findOrFail($sellbook);
     return view('backend.adminsellbook.show',compact('sellbookshow'));    
     }


 
    public function edit($sellbook)
{
    //    $this->authorize('sellbook_update');
      $sellbookedit=sellbook::findOrFail($sellbook);
      return view('backend.adminsellbook.edit',compact('sellbookedit'));  
}
 
    public function update(SellbookRequest $request,$sellbook)
{
    if($file=$request->file('bookimage')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/sellbooks'),$filename);
    }  
      $sellbookupdate=sellbook::findOrFail($sellbook);
      $sellbookupdate->update([
         
        'booktitle'=>$request->booktitle,
        'bookauthor'=>$request->bookauthor,
        'bookedition'=>$request->bookedition,
        'bookquantity'=>$request->bookquantity,
        'price'=>$request->price,
        'mobile'=>$request->mobile,
        'bookimage'=>$filename??'',
       ]
       );
       return redirect()->route('sellbooks.index')->withMessage('Successfully updated');
       
}

public function destroy($sellbook)
{
      $sellbookshow=sellbook::findOrFail($sellbook)->delete();
      return redirect()->route('sellbooks.index')->withMessage('Successfully Data Deleted');       
}
     

}
