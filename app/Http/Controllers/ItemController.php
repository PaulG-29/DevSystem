<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Items;
use App\Models\Borrows;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ItemController extends Controller
{
    public function dashboardOverview1()
    {
        $items = Items::All();
        $borrow = Borrows::count();
        $dd = Borrows::where("status", '0')->get();
        $order = Orders::count();

        return view('pages.dashboard-overview-1', compact('items','borrow','order','dd'));
    }  
    
    public function index()
    {
            // $data = array
            // (
            //     "items" => Items::where(['active' => 'YES'])->filter(request(['item_name', 'search']))->orderBy('item_name', 'asc')->paginate(10),
            //     "active_page" => 'item_list',
            //     'title' => 'List of item | Item Area'
            // );
        $item = Items::All();
        $data = array("items" => DB::table('items')->orderBy('created_at', 'asc')->paginate(5));
        for ($i = 0; $i < count($item); $i++) {
            $item[$i]['item_no'] = $item[$i]['item_no'] - $item[$i]->borrows()->sum('item_no');
        }
        //  dd($item);

        return view('product.index', [
            'items' => $item,
            'data' => $data,
        ])
        ->with('title', 'List of Item');
    }

    public function store(Request $request)
    {

        $item = new Items;
        $item -> item_name = $request -> item_name;
        $item -> description = $request -> description;
        $item -> item_no = $request -> item_no;
        $item -> date_purchase = $request -> date_purchase;
        $item -> date_validty = $request -> date_validty;
        $validated['status']=($request -> status == false ? '1':'0');
        $item->save($validated);


        return redirect('/item-list')->with('message', 'New Item was added successfully!');
    }

    public function edit(Request $request)
    {

        $item = Items::findorfail($request->id);
        $item -> item_name = $request-> item_name;
        $item -> description = $request -> description;
        $item -> item_no = $request-> item_no;
        $item -> date_purchase = $request-> date_purchase;
        $item -> date_validty = $request-> date_validty;
        $validated['status']=($request->status == false ? '1':'0');

        $item->update($validated);

        // dd($item);
        
        return redirect('/item-list')->with('message', 'Item was updated successfully!');
    }

    public function destroy(Request $request){ 
        $item = Items::findorfail($request->id);
        $item->delete();  

        return back()->with('message', 'Data was successfully Deleted');
     }
}
