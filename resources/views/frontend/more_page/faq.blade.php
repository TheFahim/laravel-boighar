 <x-frontend.layout.master>
    @slot('title')
    FAQ
    @endslot

<!-- Slider Start -->
<section class="">
	<img src="{{ asset('ui.frontend.images/banner.faq.jfif') }}" alt="" style="width: 100%;">
</section>

<br>
<br>
 

<!--FAQ Start-->

<div class="faq_area section_padding_130" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->

                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3><span>Frequently </span> Asked Questions</h3>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">My order hasn't arrived yet; can I check the status of my order online?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Yes. If you are Signed In to your account, click on Orders in the header above to review open order status.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">How long does it take for delivery to US destinations?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>For domestic shipments, please allow 5 to 15 days - for delivery.</p>
                                
                        </div>
                    </div>


                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">How can I buy text books?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>The University Store provides textbooks through our online bookstore. Students can choose to buy books from the online bookstore, or one of the independent buyers listed on the online bookstore. Students can choose new, used, or digital versions of their textbooks. Most books arrive within 4-5 days of order placement. If students need their textbooks by the first day of class, we encourage them to pre-order. Course Packets will still be available for sale at the University Store..</p>
                                
                        </div>
                    </div>


                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Can I pick my order up at the store?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Yes! Select the "in-store pickup" option at checkout if you would like to pick your items up at the store instead of having them mailed to you.
                                    You will receive an email or phone call when your order is ready to be picked up. Pickup times are during regular store hours.Your items will generally be at the downstairs register, unless they are MHC merchandise items. Your email should have instructions!</p>
                                
                        </div>
                    </div>

                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingThree">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">What if I can't find what I'm looking for?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>The best way to locate a product in the online bookstore is to use the Product Search functions located in the top navigation area of the bookstore. If you need further help, call us at +880 1859844825</p>
                                <p>If you are looking for information on other Hazelden services or programs, type a keyword in the Search box in the upper right corner of any page on the Hazelden Web site. If you have a product catalog, you can order items by their item number in Online Quick Order.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Support Button-->
                <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <i class="lni-emoji-sad"></i>
                    <p class="mb-0 px-2">Can't find your answers?</p>
                    <a href="#"> Contact us</a>

                </div>

                <br>
                <br>
                <br>
<div class="question" style="margin-left: 100px;">
<h2>Do You Have Any Questions</h2>
</div>
<br>
<br>

    <x-backend.alertmessage.alertmessage type="success" :message="session('message')" />

                <form class="row g-3" method="POST" action="{{route('faq.store')}}">
                    @csrf
                    <div class="col-md-6">
                        <x-frontend.forms.input name="name" type="text" id="name" :value="old('name')"/>
                    </div>
                    <div class="col-md-6">
                        <x-frontend.forms.input name="email" type="email" id="email" :value="old('email')"/>
                      <br>
                      
                    </div>
                    <div class="col-12">
                        <x-frontend.forms.textarea name="comment" type="text" id="comment" :value="old('comment')"/>
                    </div>
                      </select>
                    </div>
                   <br>
                   <br>
                    <div class="col-6" style="margin-left: 300px;">
                      <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
 
</x-frontend.layout.master>








 
 
 
   