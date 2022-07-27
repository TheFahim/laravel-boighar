<x-frontend.layout.master>
    @slot('title')
        User Profile
    @endslot
    <section class="section gray-bg ">
        <div class="container rounded bg-white">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ auth()->user()->name }}</span><span class="text-black-50">{{ auth()->user()->email }}</span><span>
                    </span>
                    </div>
                </div>
                <div class="col border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Update Profile Info</h4>
                        </div>
                        {{-- <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="">
                            </div>

                        </div> --}}
                        <div class="row mt-3">
                            
                            <div class="col-md-6">
                                <x-frontend.form.input name="name" text="Full Name" type="text" :value="old('name')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="mobile" text="Mobile Number" type="tel" :value="old('mobile')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="email" text="Email" type="email" :value="old('email')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="paddress" text="Parmanent Address" type="text" :value="old('booktitle')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="booktitle" text="Present Address" type="text" :value="old('booktitle')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="booktitle" text="Post Code" type="text" :value="old('booktitle')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="booktitle" text="Division" type="text" :value="old('booktitle')"/>
                            </div>
                            <div class="col-md-6">
                                <x-frontend.form.input name="booktitle" text="District" type="text" :value="old('booktitle')"/>
                            </div>


                             
                           
                            {{-- <div class="col-md-12">
                                <label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email id" value="">
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <label class="labels">Enter New Password</label><input type="text" class="form-control" placeholder="enter address line 2" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Re-type New Password</label><input type="text" class="form-control" placeholder="enter address line 2" value="">
                            </div> --}}

                        </div>

                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="button">
                            Save Profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</x-frontend.layout.master>
