
<div id="request" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{ route('request.create')}}" method="POST">
        @csrf
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <div class="py-6 px-6 lg:px-8">
               <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Request</h3>
               <h5>Note: One Request at a time.</h5>
                   <div>
                        
                       <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Request Name</label>
                       <input id="crud-form-1" name="request_name" type="text" class="form-control w-full" placeholder="Request Name" required>
                       <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purpose</label>
                       <input id="crud-form-3" name="purpose" type="text" class="form-control" placeholder="Purpose" aria-describedby="input-group-1" required>
                       <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Item</label>
                       <input id="crud-form-3" name="item" type="text" class="form-control" placeholder="Item Name" aria-describedby="input-group-1" required>
                       <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Quantity</label>
                       <input id="crud-form-3" name="qty" type="number" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" required>
                       <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Amount</label>
                       <input id="crud-form-3" name="amount" type="number" class="form-control" placeholder="Amount" aria-describedby="input-group-1" required>

                   </div>

               
           </div> <!-- END: Modal Body -->
            <!-- BEGIN: Modal Footer -->
            <div class="modal-footer"> <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
               <button type="submit" class="btn btn-primary w-20">Submit</button> </div> <!-- END: Modal Footer -->
           
        </div>
    </form>
    </div>
</div> 