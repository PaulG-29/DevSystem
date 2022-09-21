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
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
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
                                       <td>There are no data.</td>
                                       <td></td>
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
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
