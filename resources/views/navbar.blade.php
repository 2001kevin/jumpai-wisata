<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <nav class="bg-[#EEF4F7] dark:bg-[#EEF4F7] fixed w-full z-20 top-0 start-0 border-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="https://ik.imagekit.io/u1ds9zj1i/images/logo%20(2).png?updatedAt=1708904436165" class=""
                alt="Flowbite Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @can('isAdmin')
                    <div class="dropdown inline-block relative">
                        <button class="bg-[#246E79] font-semibold py-2 px-6 rounded-xl inline-flex items-center">
                            <span class="mr-1 text-white">Welcome, {{ auth('web')->user()->name }}</span>
                            <svg class="fill-current h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu w-full absolute hidden text-gray-700 pt-1 bg-white rounded-lg">
                            <li class=""><a class="bg-white hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                    href="{{ route('post.index') }}">Dashboard</a></li>
                            <li class="">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button
                                        class="bg-white w-full text-start hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                        type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @elsecan('isUser')
                    <div class="dropdown inline-block relative">
                        <button class="bg-violet-700 font-semibold py-2 px-6 rounded-xl inline-flex items-center">
                            <span class="mr-1 text-white">Welcome, {{ auth('web')->user()->name }}</span>
                            <svg class="fill-current h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu w-full absolute hidden text-gray-700 pt-1 bg-white rounded-lg">
                            <li class="">
                                </form>
                                <a class="bg-white hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                    href="{{ route('logout') }}">logout</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" type="button"
                            class="text-black bg-[#D9ED82] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#D9ED82] dark:hover:bg-[#C4D578] text-gray-900 dark:focus:ring-blue-800">
                            Login
                        </a>
                    </div>
                @endcan
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-[#EEF4F7] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#EEF4F7] md:dark:bg-[#EEF4F7] dark:bg-[#EEF4F7]">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-[#246E79] rounded-xl hover:bg-[#D9ED82] {{ Request::is('home') ? 'bg-[#D9ED82]' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('index-blog') }}"
                            class="block py-2 px-3 text-[#246E79] rounded-xl hover:bg-[#D9ED82] {{ Request::is('blog') ? 'bg-[#D9ED82]' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="/aboutUs"
                            class="block py-2 px-3 text-[#246E79] rounded-xl hover:bg-[#D9ED82] {{ Request::is('aboutUs') ? 'bg-[#D9ED82]' : '' }}">About
                            Us</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block py-2 px-3 text-[#246E79] rounded-xl hover:bg-[#D9ED82] {{ Request::is('contact') ? 'bg-[#D9ED82]' : '' }}">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('main')
</body>

</html>
