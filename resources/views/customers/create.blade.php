@extends('layouts.app')

@section('content')

<div class="container">
	

	 <div class="row">
	        <div class="col-lg-12 col-sm-12">
	            <div class="card">
	                <div class="card-header" style="display: flex;justify-content: flex-start;">
	                    
	                    <p>Register a New Customer</p>
	                	

	                </div>
	                <div class="card-body" style="display: flex;justify-content: center;">
	                    <div class="col-lg-12">

	                    <form method="post"  action="/customers/create" class="container-fluid" id="custForm"  style="margin-left: 20px;">

	                    @csrf	                    

	                    <div class="row">
	                        <div class="col-lg-2">
	                            <label class="label">First Name</label>
	                        </div>
	                        <div class="col-lg-6 mx-sm-3">
	                            <input type="text" id="txtFirstName" class="form-control form-control-sm" name="firstname" value="" required="">
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-2">
	                            <label>Last Name</label>
	                        </div>
	                        <div class="col-lg-6 mx-sm-3">
	                            <input type="text" id="txtLastName" class="form-control form-control-sm" name="lastname" value="" required>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-2">
	                            <label>Phone Number</label>
	                        </div>
	                        <div class="col-lg-6 mx-sm-3">
	                            <input type="text" id="txtPhoneNumber" class="form-control form-control-sm" name="phonenumber" value="">
	                        </div>

	                    </div>

	                    <button type="submit "id="btnSave"  class="btn btn-sm btn-outline-info">Save</button>
	                    <a class="btn btn-sm btn-outline-info" href="/customers" role="button">Back</a>

	                </form>

	                
	                    </div>
	                </div>
	            </div>


	                



	        </div>

	    </div>

</div>
@endsection