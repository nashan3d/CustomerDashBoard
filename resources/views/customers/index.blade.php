@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row" style="margin-top:2px">
        <div class="col-sm-12 p-3 mb-5 bg-white rounded" style="margin-left: 35px">
            
            <div style="display: flex;justify-content: flex-start;">
            <h6>Registered Customers</h6><a href="/customers/view" class="btn btn-sm btn-outline-info">Create</a>
            <!-- Button -->
            </div>
            <ul>
                @forelse($customers as $key => $customer)

                    <li>
                        <a href="#" onclick="displayForm({{$customer->id}});">{{$customer->firstname}}  {{$customer->lastname}}</a>
                    </li>
                @empty
                    <p>No Customers Created</p>

                @endforelse
            </ul>
        </div>
        <div class="col-sm-12 p-3 mb-5 bg-white rounded" style="margin-left:10px;width: inherit;display: flex;justify-content:" >
            
                
                
                <form method="post"  action="" class="container-fluid" id="custForm"  style="margin-left: 20px;display: none;">

                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="col-3">
                            <label class="label">First Name</label>
                        </div>
                        <div class="col-7 mx-sm-3">
                            <input type="text" id="txtFirstName" class="form-control form-control-sm" name="firstname" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label>Last Name</label>
                        </div>
                        <div class="col-7 mx-sm-3">
                            <input type="text" id="txtLastName" class="form-control form-control-sm" name="lastname" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label>Phone Number</label>
                        </div>
                        <div class="col-7 mx-sm-3">
                            <input type="text" id="txtPhoneNumber" class="form-control form-control-sm" name="phonenumber" value="">
                        </div>
                        
                    </div>

                    <button type="submit "id="btnUpdate"  class="btn btn-sm btn-outline-info">Update</button>
                    
                </form>

                <form method="post" id="dlForm" style="display: none">
                    @csrf
                    @method('DELETE')
                    <button id="btnDelete" type="submit" class="btn btn-sm btn-outline-info">Delete</button>
                </form>

            

        </div>

    </div>
</div>
@endsection


