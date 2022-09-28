{{-- @dd($items->Count()) --}}
@extends('../layout/' . $layout)

@section('subhead')
    <title>DevSys - IMC System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
        <x-messages />
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Dashboard</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="activity" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                            <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{count($items)}}</div>
                                    <div class="text-base text-slate-500 mt-1">No. of Item</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            {{-- <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$order}}</div>
                                    <div class="text-base text-slate-500 mt-1">No. of Requested Item</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$borrow}}</div>
                                    <div class="text-base text-slate-500 mt-1">No. of Borrowed Item</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{count($dd)}}</div>
                                    <div class="text-base text-slate-500 mt-1">No. of Not Returned</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->

        
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">List of New Items</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        </div>
                    </div>
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
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($items) && $items->count())
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
                                    </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">

                    <!-- BEGIN: Schedules -->
                
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
