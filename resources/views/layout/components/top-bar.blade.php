{{-- @dd(auth()->user()->name) --}}
<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i>
        </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">Notifications</div>
                @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                    <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
                        <div class="w-12 h-12 flex-none image-fit mr-1">

                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $faker['times'][0] }}</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[9]['photos'][0]) }}">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="/register" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account
                    </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item hover:bg-white/5"><i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i>Logout </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
