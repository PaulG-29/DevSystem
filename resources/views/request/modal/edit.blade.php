<div id="edit{{$borrow->id}}" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{ route('borrow.edit')}}" method="POST">
        @csrf
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <div class="py-6 px-6 lg:px-8">
               <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Item</h3>
                   <div>
                    <input type="hidden" value="{{ $borrow->id }}" name="id"/>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Borrower Name</label>
                    <input id="crud-form-1" name="borrower_name" type="text" class="form-control w-full" placeholder="Name" value={{$borrow->borrower_name}} required>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Item</label>
                    <select id="item" name="item_id" class="block appearance-none w-full bg-white border border-gray-200 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline">
                     @foreach($items as $item)
                     <option value="{{ $item->id }}">{{ $item->item_name}}</option>
                     @endforeach
                     
                    </select>
                    
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity</label>
                    <input id="crud-form-3" name="item_no" type="text" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" value={{$borrow->item_no}} required>
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purpose</label>
                    <input id="crud-form-3" name="purpose" type="text" class="form-control" placeholder="Purpose" aria-describedby="input-group-1" value={{$borrow->purpose}} required>
                    <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Borrow Date</label>
                    <input id="crud-form-3" name="date_borrow" type="date" class="form-control" placeholder="Borrow Date" aria-describedby="input-group-1" value={{$borrow->date_borrow}} required>
                    <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Expect. Returned</label>
                    <input id="crud-form-3" name="date_returned" type="date" class="form-control" placeholder="Expected Returned" aria-describedby="input-group-1" value={{$borrow->date_returned}} required>
                   </div>

                    <div class="mt-3"> <label>Switch to change status</label>
                    <div class="mt-2">
                        <div class="form-check form-switch"> 
                        <input id="checkbox-switch-7" type="checkbox" name="status" {{$borrow->status == '1' ? 'checked':''}} class="form-check-input"  > 
                        <label class="form-check-label" for="checkbox-switch-7">
                            Returned</label> </div>
                    </div>
                    </div>

               
           </div> <!-- END: Modal Body -->
            <!-- BEGIN: Modal Footer -->
            <div class="modal-footer"> <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
               <button type="submit" class="btn btn-primary w-20">Submit</button> </div> <!-- END: Modal Footer -->
           
        </div>
    </form>
    </div>
</div> 