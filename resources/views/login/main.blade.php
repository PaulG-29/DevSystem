@extends('../layout/' . $layout)

@section('head')
    <title>{{$title}}</title>
@endsection

@section('content')
    <div class="container sm:px-10">
    <x-messages />
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <span class="text-white text-lg ml-3">
                        {{$title_head}}
                    </span>
                </a>
                <div class="my-auto">
                

                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0  ">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                    <p class="text-gray-600 pt-2">Sign up a new account <a href="/register" class="text-primary-300 font-bold">here</a></p>
                    
                    <div class="intro-x mt-8">
                        <form action="/login/process" method="POST" id="login-form">
                            @csrf
                            @error('email')
                            <div class="login__input-error text-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror
                            <input id="email" name="email" type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" value="">
                            <input id="password" name="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" value="">
                        
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input name="remember" id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>   
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
  
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </form>
        </div>
    </div>
@endsection


