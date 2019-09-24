@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Customers &nbsp;&nbsp;&nbsp; <a class="btn btn-sm btn-outline-info" href="/customers/view" role="button">Create</a>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $key => $customer)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$customer->firstname}}</td>
                                    <td>{{$customer->lastname}}</td>
                                    <td>{{$customer->phonenumber}}</td>
                                    <td>
                                        <a href="#" onclick="displayForm({{$customer->id}});">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="dvCollapse" style="display: none">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header" style="display: flex;justify-content: flex-end;">
                    <form method="post" id="dlForm" >
                    @csrf
                    @method('DELETE')
                    <button id="btnDelete" type="submit" class="btn btn-sm btn-outline-info">
                      Delete Selected Customer
                    </button>
                </form>

                </div>
                <div class="card-body">
                    <div class="col-lg-12">

                    <form method="post"  action="" class="container-fluid" id="custForm"  style="margin-left: 20px;">

                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="col-lg-2">
                            <label class="label">First Name</label>
                        </div>
                        <div class="col-lg-4 mx-sm-3">
                            <input type="text" id="txtFirstName" class="form-control form-control-sm" name="firstname" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Last Name</label>
                        </div>
                        <div class="col-lg-4 mx-sm-3">
                            <input type="text" id="txtLastName" class="form-control form-control-sm" name="lastname" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Phone Number</label>
                        </div>
                        <div class="col-lg-4 mx-sm-3">
                            <input type="text" id="txtPhoneNumber" class="form-control form-control-sm" name="phonenumber" value="">
                        </div>

                    </div>

                    <button type="submit "id="btnUpdate"  class="btn btn-sm btn-outline-info">Update</button>

                </form>

                
                    </div>
                </div>
            </div>


                



        </div>

    </div>
</div>
@endsection