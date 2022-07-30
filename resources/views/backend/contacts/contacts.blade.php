<x-backend.layout.master>
    @slot('title')
    Contact
    @endslot
    <div class="card mb-4">
        @slot('bottomheader')
        Contact
        @endslot
        <div class="card-header"  style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Contact
            <a href="{{ route('contacts.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Contact</button></a>
        </div>
        <x-backend.alertmessage.alertmessage type="success" />
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($contacts as $contact)


                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->fullname }}</td>
                        <td>{{ $contact->mobile }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                        <div class="d-flex ">
                       
                        <x-backend.buttonlink.editlink action="" style="display:inline"/>
                        <x-backend.buttonlink.deletelink action="" />

                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-backend.layout.master>