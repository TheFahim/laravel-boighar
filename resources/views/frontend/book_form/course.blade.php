<x-frontend.layout.master>
    <x-slot name="title">Course</x-slot>
 
<section class="">
 <img src="http://localhost/Book_Store_Demo/images/form_banner/bg.jpg" alt="" style="width: 100%;">
</section>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Course</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>
                     

                     <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="checkbox" checked autocomplete="off"> SELL YOUR BOOKS
                        </label>
                      </div>
            </div>
        </div>
    </div>
</div>

 
<div class="container card w-50">
<form class="form-horizontal" role="form" action="{{ route('requestbook.insert') }}" method="post" enctype="multipart/form-data">
        <h2>Course</h2>
        <br>
  
        <br>
        <br>
        <div class="form-group">
           
            <div class="col-sm-11">
                <input type="text" id="book title" placeholder="Course Title" class="form-control" autofocus require name="coursetitle">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book author" placeholder="batch no" class="form-control" autofocus require name="batchno">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <label for="">Start Date</label>
                <input type="date" id="book edition"   class="form-control" autofocus  require name="startdate">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <label for="">End Date</label>
                <input type="date" id="book quality" placeholder="Book Quality" class="form-control" autofocus  require name="enddate">
            </div>
        </div>

        <div class="form-group">
           
            <div class="col-sm-11">
                <input type="text" id="book title" placeholder="Instructor Name" class="form-control" autofocus require name="instructorname">
            </div>
        </div>
     
        

   
        <div class="form-group">
            <div class="col-sm-11">
                <label for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" value="true" checked>
            </div>
        </div>
        {{-- <div class="form-group" style="padding-left: 20px; color: gray;">
            <label for="exampleFormControlFile1">Book Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bookimage">
          </div> --}}
          
        <div class="form-group" style="padding-left: 20px; color: gray;">
            <button type="submit"class="btn btn-info" name="submit">Submit</button>
          </div>

           
    
        
        </div> 
      
            
    
    </form>  <!-- /form -->
</div>
				 
  
</x-frontend.layout.master>
   

    <!-- 
    Essential Scripts
    =====================================-->

   

  
   