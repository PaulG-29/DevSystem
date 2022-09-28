@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Profile - DevSys - IMC System</title>
@endsection

@section('subcontent')
<x-messages />
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
   
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <form action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <input type="hidden" value="{{(auth()->user()->id)}}" name="id"/>
                                        <label for="update-profile-form-1" class="form-label">First Name</label>
                                        <input name="first_name" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{(auth()->user()->first_name)}}" >
                                        @error('first_name')
                                        <div class="login__input-error text-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <label for="update-profile-form-1" class="form-label">Last Name</label>
                                        <input name="last_name" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{(auth()->user()->last_name)}}" >
                                        @error('last_name')
                                        <div class="login__input-error text-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <label for="update-profile-form-1" class="form-label">Email</label>
                                        <input name="email" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{(auth()->user()->email)}}" >
                                        @error('email')
                                        <div class="login__input-error text-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img class="rounded-md" alt="" src="{{ asset('/storage/'. auth()->user()->photo)}}">
                                                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                    <i data-lucide="x" class="w-4 h-4"></i>
                                                </div>
                                            </div>
                                            <div class="mx-auto cursor-pointer relative mt-5">
                                                <button type="submit" value="save" class="btn btn-primary w-full">Change Photo</button>
                                                <input name="photo" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                </div>
                            </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-full">Save</button>
                        </div>
                        </div>

                    {{-- </form> --}}
                    {{-- <form action="{{route('upload-photo')}}" method="POST" enctype="multipart/form-data"> --}}
                    </div>
                </form>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection
