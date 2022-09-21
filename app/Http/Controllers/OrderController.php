<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
// use app\Models\Request;

class OrderController extends Controller
{
    public function index() 
    {
  
        $data = array("order" => DB::table('orders')->orderBy('created_at', 'asc')->paginate(8));

        return view('request.mainrequest', $data)->with('title', 'Request Purchase');

    }

    public function store(Request $request)
    {
        $order = new Orders;
        $order -> request_name = $request -> request_name;
        $order -> purpose = $request -> purpose;
        $order -> item = $request -> item;
        $order -> qty = $request -> qty;
        $order -> amount = $request -> amount;
        $validated['status']=($request -> status == true ? '1':'0');
        // $request->save($validated);

        Orders::create();


        return redirect('/request-list')->with('message', 'Data was added successfully!');
    }
}
