@extends('../layout/base')


@if(session()->has('message'))

<!-- <div x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="alert alert-primary fixed top-2 right-0 z-50 alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> {{session('message')}} <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div> -->

   <!-- BEGIN: Notification Content -->
 <div x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false, 5000)"   class="toastify-content flex fixed mt-0.7 right-8 z-50"> <i class="text-success" data-lucide="check-circle"></i>
  <div class="ml-4 mr-4">
      <div class="font-medium">Message Alert!</div>
      <div class="text-slate-500 mt-1">{{session('message')}}.</div>
  </div>
</div> <!-- END: Notification Content -->

@endif
