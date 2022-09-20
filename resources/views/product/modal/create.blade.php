<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{ route('item.create')}}" method="POST">
        @csrf
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <div class="py-6 px-6 lg:px-8">
               <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Item</h3>
                   <div>
                        
                       <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Item Name</label>
                       <input id="crud-form-1" name="item_name" type="text" class="form-control w-full" placeholder="Input Name" required>
                       <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                       <input id="crud-form-1" name="description" type="text" class="form-control w-full" placeholder="Description" required>
                       <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity</label>
                       <input id="crud-form-3" name="item_no" type="text" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" required>
                       <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Date of Purchased</label>
                       <input id="crud-form-3" name="date_purchase" type="date" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" required>
                       <label for="date" class="block text-sm font-medium text-gray-900 dark:text-gray-300 m">Date of Validity</label>
                       <select id="crud-form-3" name="date_validty" class="form-control"  aria-describedby="input-group-1" required>
                           <option value="" {{old('date_validty') == "" ? 'selected' : ''}}></option>
                           <option value="1 year" {{old('date_validty') == "1 year" ? 'selected' : ''}}>1 year</option>
                           <option value="2 years" {{old('date_validty') == "2 years" ? 'selected' : ''}}>2 years</option>
                           <option value="3 years" {{old('date_validty') == "3 years" ? 'selected' : ''}}>3 years</option>
                           <option value="4 years" {{old('date_validty') == "4 years" ? 'selected' : ''}}>4 years</option>
                           <option value="5 years" {{old('date_validty') == "5 years" ? 'selected' : ''}}>5 years</option>
                           <option value="6 years" {{old('date_validty') == "6 years" ? 'selected' : ''}}>6 years</option>
                           <option value="7 years" {{old('date_validty') == "7 years" ? 'selected' : ''}}>7 years</option>
                           <option value="8 years" {{old('date_validty') == "8 years" ? 'selected' : ''}}>8 years</option>
                           <option value="9 years" {{old('date_validty') == "9 years" ? 'selected' : ''}}>9 years</option>
                           <option value="10 years" {{old('date_validty') == "10 years" ? 'selected' : ''}}>10 years</option>
                       </select>
                   </div>

               
           </div> <!-- END: Modal Body -->
            <!-- BEGIN: Modal Footer -->
            <div class="modal-footer"> <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
               <button type="submit" class="btn btn-primary w-20">Submit</button> </div> <!-- END: Modal Footer -->
           
        </div>
    </form>
    </div>
</div> 