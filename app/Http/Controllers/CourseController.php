<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
       
    public function course(){
        return view('frontend.book_form.course');
    }
    
     public function insert(Request $request){
             
        
        course::create([
        'title'=>$request->coursetitle,
         'batch_no'=>$request->batchno,
         'class_start_date'=>$request->startdate,
         'class_end_date'=>$request->enddate,
         'instructor_name'=>$request->instructorname,
         'is_active'=>$request->is_active,
       
        ]
        );
        return redirect()->route('sellbook')->withMessage('Successfully submitted');
     }
    
    
    
    
    // //Admin Sell Book
    
    // public function sellbooklist()
    // {
    
    //     $sellbooklist=sellbook::all();
    //     return view('backend.adminsellbook.sellbooklist',[
    //         'sellbooklist'=>$sellbooklist
    //     ]);
    // }
    
    
    //     public function show($sellbook_id)
    //     {
     
          
    //      $sellbookshow=sellbook::findOrFail($sellbook_id);
    //      return view('backend.adminsellbook.show',compact('sellbookshow'));
             
    //      }
    
    
     
    //     public function edit($sellbook_id)
    // {
    //       $sellbookedit=sellbook::findOrFail($sellbook_id);
    //       return view('backend.adminsellbook.edit',compact('sellbookedit'));  
    // }
     
    //     public function update(SellbookRequest $request,$sellbook_id)
    // {
    //       $sellbookupdate=sellbook::findOrFail($sellbook_id);
    //       $sellbookupdate->update([
    //         'booktitle'=>$request->booktitle,
    //         'bookauthor'=>$request->bookauthor,
    //         'bookedition'=>$request->bookedition,
    //         'bookquantity'=>$request->bookquantity,
    //         'price'=>$request->price,
    //         'mobile'=>$request->mobile
    //        ]
    //        );
    //        return redirect()->route('admin.sellbooklist')->withMessage('Successfully updated');
           
    // }
    
    // public function destroy($sellbook_id)
    // {
    //       $sellbookshow=sellbook::findOrFail($sellbook_id)->delete();
    //       return redirect()->route('admin.sellbooklist')->withMessage('Successfully Data Deleted');       
    // }
         
    
    }
    
 