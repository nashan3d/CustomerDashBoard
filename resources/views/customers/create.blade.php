@extends('layouts.app')

@section('content')

<div class="card" style="display: flex;justify-content: center;">
   <form method="post"  action="/customers/create"  style="margin-left: 20px;">

                    @csrf
                    

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

                    <button type="submit "id="btnSave"  class="btn btn-sm btn-outline-info">Save</button>
                    
                </form>

</div>
@endsection