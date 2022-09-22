



@extends('../layout/' . $layout)

@section('subhead')
<title>{{$title}}</title>
@endsection

@section('subcontent')
<x-messages />
<h2 class="intro-y text-lg font-medium mt-10">Borrower List</h2>

<div class="grid grid-cols-12 gap-6 mt-5">

    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button data-tw-toggle="modal" data-tw-target="#create1" class="btn btn-primary shadow-md mr-2">Add Borrower</button>
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
            <div class="hidden md:block mx-auto text-slate-500">  </div>
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
                        <th class="whitespace-nowrap">NAME</th>
                        <th class="whitespace-nowrap">ITEM</th>
                        <th class="whitespace-nowrap">QUANTITY</th>
                        <th class="whitespace-nowrap">PURPOSE</th>
                        <th class="text-center whitespace-nowrap">DATE OF BORROW</th>
                        <th class="text-center whitespace-nowrap">EXPECT. TO RETURNED</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($borrows) && $borrows->count())
                    @foreach ($borrows as $borrow)
                    <tr class="intro-x">    
                        <td class="text-center">
                            {{ $borrow->id }}.
                        </td>
                        <td>
                            <div class="font-medium whitespace-nowrap">
                                {{ $borrow->borrower_name }}</div>
                        </td>
                        <td>
                            {{$borrow->item->item_name}}                       
                        </td>
                        <td>
                            {{ $borrow->item_no}}
                        </td>
                        <td class="text-center">
                            {{ $borrow->purpose }}
                        </td>
                        <td class="text-center">
                            {{ $borrow->date_borrow }}
                        </td>
                        <td class="text-center">
                            {{ $borrow->date_returned}}
                        </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{ $borrow->status == '1' ? 'text-success' : 'text-danger' }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $borrow->status == '1' ? 'Active':'Inactive' }}
                                </div>
                            </td>
                                               
                            <td class="table-report__action w-56">  
                                <div class="flex justify-center">
                                    <a href="#edit{{$borrow->id}}" class="flex items-center mr-1" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit{{$borrow->id}}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1" ></i> Edit
                                    </a>
                                    @include('borrow.modal.edit')
                                     
                                    <a href="#delete{{ $borrow->id }}" class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete{{ $borrow->id }}">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete        
                                    </a>
                                    @include('borrow.modal.delete')
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="mt-2">
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>There are no data.</td>
                           <td></td>
                           <td></td>
                           <td></td> 
                        </tr>
                        @endif
                </tbody>
            </table>
               
        </div>
   
        <div class="intro-y col-span-12  flex-wrap md:flex-row">
            {{-- {{ $borrows->links('pagination::tailwind')}} --}}
        </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    </div>
       

    @include('borrow.modal.create') 
  
@endsection
