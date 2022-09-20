

@extends('../layout/' . $layout)

@section('subhead')
<title>{{$title}}</title>
@endsection

@section('subcontent')
<x-messages />
    <h2 class="intro-y text-lg font-medium mt-10">List of Item</h2>

    <div class="grid grid-cols-12 gap-6 mt-5">
 
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview" class="btn btn-primary shadow-md mr-2">Add New Item</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>

                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500"> {{ $items->links('pagination::tailwind-show')}} </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <form action="/item-list" method="GET">
                    <input type="text" id="search" name="search" class="form-control w-56 box pr-10" placeholder="Search...">
                   <button type="submit"> <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="text-center whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">ITEM NAME</th>
                        <th class="whitespace-nowrap">DESCRIPTION</th>
                        <th class="text-center whitespace-nowrap">QUANTITY</th>
                        <th class="text-center whitespace-nowrap">DATE OF PURCHASE</th>
                        <th class="text-center whitespace-nowrap">DATE OF VALIDITY</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="intro-x">    
                            <td class="text-center">
                                {{ $item->id }}.
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">
                                    {{ $item->item_name }}</div>
                            </td>
                            <td>
                                {{ $item->description }}
                            </td>
                            <td class="text-center">
                                {{ $item->item_no }}
                            </td>
                            <td class="text-center">
                                {{ $item->date_purchase }}
                            </td>
                            <td class="text-center">
                                {{ $item->date_validty }}
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{ $item->status == '1' ? 'text-success' : 'text-danger' }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $item->status == '1' ? 'Active':'Inactive' }}
                                </div>
                            </td>
                                               
                            <td class="table-report__action w-56">  
                                <div class="flex justify-center items-center">
                                    <a href="#edit{{$item->id}}" class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit{{$item->id}}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1" ></i> Edit
                                    </a>
                                    @include('product.modal.edit')
                                     
                                    <a href="#delete{{ $item->id }}" class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete{{ $item->id }}">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete        
                                    </a>
                                    @include('product.modal.delete')
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
               
        </div>
   
        <div class="intro-y col-span-12  flex-wrap md:flex-row">
            {{ $items->links('pagination::tailwind')}}
        </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    </div>
       

        @include('product.modal.create')
  
@endsection
