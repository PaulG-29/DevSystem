<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Borrows;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BorrowController extends Controller
{
    //
 
    public function index()
    {
        $borrow = Borrows::All();   
        $items = Items::All();
        $data = array("borrows" => DB::table('borrows')->orderBy('created_at', 'asc')->paginate(8));

        return view('borrow.borrowlist', [
            'items' => $items,
            'borrows' => $borrow,
            'data' => $data,
        ])->with('title', 'List of Borrowed Item');

    }

    public function store(Request $request)
    {

        $borrow = new Borrows;
        $borrow -> borrower_name = $request -> borrower_name;
        $borrow -> item_id = $request -> item_id;
        $borrow -> item_no = $request -> item_no;
        $borrow -> purpose = $request -> purpose;
        $borrow -> date_borrow = $request -> date_borrow;
        $borrow -> date_returned = $request -> date_returned;
        $validated['status']=($request -> status == true ? '1':'0');
        $borrow->save($validated);


        // dd($borrow->item_id);

        return redirect('/borrow-list')->with('message', 'Data was added successfully!');
    }

    public function edit(Request $request)
    {

        $borrow  = Borrows::findorfail($request->id);
        $borrow -> borrower_name = $request -> borrower_name;
        $borrow -> item_id = $request -> item_id;
        $borrow -> item_no = $request -> item_no;
        $borrow -> purpose = $request -> purpose;
        $borrow -> date_borrow = $request -> date_borrow;
        $borrow -> date_returned = $request -> date_returned;
        $validated['status']=($request -> status == true ? '1':'0');


        $borrow->update($validated);
        
        return redirect('/borrow-list')->with('message', 'Data was successfully updated');
    }

    public function destroy(Request $request){ 
        $borrow = Borrows::findorfail($request->item_id);
        $borrow->delete();  

        return back()->with('message', 'Data was successfully deleted');
     }
}
