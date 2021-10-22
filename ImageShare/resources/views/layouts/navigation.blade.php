<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-items-start  h-16">
            <div class="flex flex-col">
                <!-- Logo -->

                <!-- Navigation Links -->

                <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                    <div class="container-fluid flex ">
                        <a class="navbar-brand" href="#"><img class="w-20" src="{{asset('img/pin.png')}}"
                                                              alt="test"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                                </li>

                                <form class="flex mr-5 ml-5 ">
                                    <input class="form-control me-2 " type="search" placeholder="Search"
                                           aria-label="Search">
                                    <button
                                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
                                        type="submit">Search
                                    </button>
                                </form>
                                @auth()
                                    <li class="nav-item mt-2 flex mr-5 ml-5">
                                        <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center nav-link"
                                           href="/addImg">Ajouter une images</a>
                                    </li>
                                @endauth
                                @guest()
                                    <li class="nav-item flex mr-5 ml-5">
                                        <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center nav-link"
                                           href="/login">se connecter</a>
                                    </li>
                                @endguest
                            </ul>
                            @auth()
                                <div class="d-flex items-center">
                                    <form class="form-inline" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit">
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                </div>
                            @endauth
                        </div>

                    </div>
                </nav>
            </div>

        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            @auth()

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>
