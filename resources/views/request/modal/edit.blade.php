
<div id="edit{{$order->id}}" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{ route('request.edit')}}" method="POST">
        @csrf
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <div class="py-6 px-6 lg:px-8">
               <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Item</h3>
                   <div>
                    <input type="hidden" value="{{ $order->id }}" name="id"/>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Request Name</label>
                    <input id="crud-form-1" name="request_name" type="text" class="form-control w-full" placeholder="Request Name" value={{$order->request_name}} required>
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purpose</label>
                    <input id="crud-form-3" name="purpose" type="text" class="form-control" placeholder="Purpose" aria-describedby="input-group-1" value={{$order->purpose}} required>
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Item</label>
                    <input id="crud-form-3" name="item" type="text" class="form-control" placeholder="Item Name" aria-describedby="input-group-1" value={{$order->item}} required>
                    <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Quantity</label>
                    <input id="crud-form-3" name="qty" type="number" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" value={{$order->qty}} required>
                    <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Amount</label>
                    <input id="crud-form-3" name="amount" type="number" class="form-control" placeholder="Amount" aria-describedby="input-group-1" value={{$order->amount}} required>
                   </div>

                    <div class="mt-3"> <label>Switch to change status</label>
                    <div class="mt-2">
                        <div class="form-check form-switch"> 
                        <input id="checkbox-switch-7" type="checkbox" name="status" {{$order->status == '1' ? 'checked':''}} class="form-check-input"  > 
                        <label class="form-check-label" for="checkbox-switch-7">
                            Approved</label> </div>
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