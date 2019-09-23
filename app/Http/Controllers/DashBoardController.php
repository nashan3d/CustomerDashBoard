<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class DashBoardController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::all();       
        return view('customers.index',compact('customers'));
    }

    public function view(Request $request)
    {

    	return view('customers.create');
    }

   	public function store(Request $request)
   	{
   		 $attribute = request()->validate([
       		'firstname' => 'required',
       		'lastname' => 'required',
       		'phonenumber' => 'required'
       		
       ]);

   		 Customer::create($attribute);

   		 return redirect('/customers');
   	}

    //ajax calling
    public function detail(Request $request)
    {
    	
       $customer = Customer::find($request->id);       
       return response()->json(array('customer'=>$customer));
    }

    public function update(Request $request,Customer $customer)
    {
    	
       $attribute = request()->validate([
       		'firstname' => 'required',
       		'lastname' => 'required',
       		'phonenumber' => 'required'
       		
       ]);		
      
       $attribute['firstname'] = trim($attribute['firstname']);
       $attribute['lastname'] = trim($attribute['lastname']);
       $attribute['phonenumber'] = trim($attribute['phonenumber']);

       $customer->update($attribute);

       return redirect('/customers');
    }

    public function destroy(Request $request,Customer $customer)
    {

    	$customer->delete();
    	return redirect('/customers');

    }
}
