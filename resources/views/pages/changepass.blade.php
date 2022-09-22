@extends('../layout/' . $layout)

@section('subhead')
    <title>{{$title}}</title>
@endsection

@section('subcontent')
<x-messages />
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
    
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->

            <div class="intro-y box lg:mt-5">
                <form action="{{route('update-password')}}" method="POST">
                    @csrf
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Change Password</h2>
                </div>
                <div class="p-5">
                    <div>
                        <label for="change-password-form-1" class="form-label">Old Password</label>
                        <input name="old_password" id="change-password-form-1" type="password" class="form-control" placeholder="Old Password">
                    </div>
                    @error('old_password')
                    <div class="login__input-error text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">New Password</label>
                        <input name="new_password" id="change-password-form-2" type="password" class="form-control" placeholder="New Password">
                    </div>
                    @error('new_password')
                    <div class="login__input-error text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="mt-3">
                        <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                        <input name="new_password_confirmation" id="change-password-form-3" type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    @error('new_password_confirmation')
                    <div class="login__input-error text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                    <button class="btn btn-primary mt-4">Change Password</button>
                </div>
            </div>
            </form>
            <!-- END: Change Password -->
        </div>
    </div>
@endsection
