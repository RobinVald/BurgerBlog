<style>
    .navbar{
        font-weight: 600;

        background-image: 
        url("https://cdn.discordapp.com/attachments/915343471957655563/1183758654692937770/header.png?ex=65898028&is=65770b28&hm=41adabc17baf0edb8d06135734e04dfd1073df85158c72865e54d61c2e36ad2f&");
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        height: 10%;
    }

</style>

<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                @include('partials.links')
            </ul>
        </div>
        <img src="https://cdn.freebiesupply.com/logos/large/2x/whataburger-logo-png-transparent.png" style="width: 10%;">
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            @include('partials.links')
        </ul>
    </div>
    <div class="navbar-end">
        @guest
            <a href="{{route('login')}}" class="btn btn-secondary">Admin Login</a>
            <a href="{{route('register')}}" class="btn btn-primary mr-3">Register</a>
        @else
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary>
                            {{ Auth::user()->name }}
                        </summary>
                        <ul class="p-2 z-20 bg-base-100">
                            <li><a href="{{route('profile.edit')}}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input type="submit" value="Logout">
                                </form>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        @endif
    </div>
</div>
