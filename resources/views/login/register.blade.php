@extends('../layout/' . $layout)

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')
    <div class="container sm:px-10">
<x-messages />
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <span class="text-white text-lg ml-3">
                    {{$title_head}}
                    </span>
                </a>
                <div class="my-auto">

                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign up to your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
                </div>
            </div>
            
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    @auth
                    <p class="text-gray-600 pt-2">Return to your Dashboard <a href="/" class="text-purple-300 font-bold">here</a></p>
                    @else
                    <p class="text-gray-600 pt-2">Sign in to your account <a href="/login" class="text-purple-300 font-bold">here</a></p>
                    @endauth
                    <form action="/store" method="POST" class="flex flex-col">
                        @csrf
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" name="name" placeholder="Name" value={{old('name')}} >
                        @error('name')
                        <div class="login__input-error text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="email" class="intro-x login__input form-control py-3 px-4 block mt-4" name="email" placeholder="Email" value={{old('email')}}>
                        @error('email')
                        <div class="login__input-error text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" name="password" placeholder="Password">
                        @error('password')
                        <div class="login__input-error text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" name="password_confirmation" placeholder="Password Confirmation">
                        @error('password_confirmation')
                        <div class="login__input-error text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!-- <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                    </div> -->
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">   
                        <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                    </div>
                </div>
            </div>
        </form>
            <!-- END: Register Form -->
        </div>
    </div>
@endsection
