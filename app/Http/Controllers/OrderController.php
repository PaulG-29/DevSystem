<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
// use app\Models\Request;

class OrderController extends Controller
{
    public function index() 
    {
        $order = Orders::All();
        $data = array("orders" => DB::table('orders')->orderBy('id', 'asc')->paginate(5));

        return view('request.mainrequest', [
            'orders' => $order,
            'data' => $data,
        ])->with('title', 'Request Purchase');

    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            "request_name" => ['required'],
            "purpose" => ['required'],
            "item" => ['required'],
            "qty" => ['required'],
            "amount" => ['required'],
            'status' => 'nullable'
           
        ]);

        $validated['status'] = ($request ->status == true ? '1':'0');

 
        Orders::create($validated);


        return redirect('/request-list')->with('message', 'Data was added successfully!');
    }

    public function edit(Request $request, Orders $order)
    {

        $order  = Orders::findorfail($request->id);
        $order -> request_name = $request -> request_name;
        $order -> purpose = $request -> purpose;
        $order -> item = $request -> item;
        $order -> qty = $request -> qty;
        $order -> amount = $request -> amount;
        $validated['status']=($request -> status == true ? '1':'0');

        $order->update($validated);

        return redirect('/request-list')->with('message', 'Data was successfully updated');
    }

    public function destroy(Request $request){ 
        $order = Orders::findorfail($request->id);
        $order->delete();  

        return redirect('/request-list')->with('message', 'Data was successfully deleted');
     }



}
