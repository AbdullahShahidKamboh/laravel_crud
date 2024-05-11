<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showcustomers(){
        $customer=DB::table('customers')->simplePaginate(10);
        return view('dispalyCustomers',['data'=>$customer]);
    }
    function singlecustomer($id){
        $customer=DB::table('customers')->where('id',$id)->get();
        return view('displaySingleCustomer',['data'=>$customer]);
    }
    function singlepasscustomer($id){
        $customer=DB::table('customers')->where('id',$id)->get();
        return view('displayUpdate',['data'=>$customer]);
    }
    function deletecustomer($id){
        $customer=DB::table('customers')->where('id',$id)->delete();
        return redirect()->route('home');
    }
    function addcustomer(Request $req){
        $validatedData = $req->validate([
            'cus_name' => 'required',
            'cus_city' => 'required',
            'cus_contact' => 'required|numeric',
            'cus_product' => 'required',
            'cus_price' => 'required|numeric',
            'cus_discription' => 'required',
        ]);
        $customer=DB::table('customers')->insert([
            'name'=>$req->cus_name,
            'city'=>$req->cus_city,
            'contacts'=>$req->cus_contact,
            'products'=>$req->cus_product,
            'price'=>$req->cus_price,
            'description'=>$req->cus_discription,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->route('home');
    }
    function updatecustomer(Request $req){
        $validatedData = $req->validate([
            'cus_name' => 'required',
            'cus_city' => 'required',
            'cus_contact' => 'required|numeric',
            'cus_product' => 'required',
            'cus_price' => 'required|numeric',
            'cus_discription' => 'required',
        ]);
        $customer=DB::table('customers')->where('id',$req->cus_id)->update([
            'name'=>$req->cus_name,
            'city'=>$req->cus_city,
            'contacts'=>$req->cus_contact,
            'products'=>$req->cus_product,
            'price'=>$req->cus_price,
            'description'=>$req->cus_discription,
            'updated_at'=>now()
        ]);
        return redirect()->route('home');
    }
}
