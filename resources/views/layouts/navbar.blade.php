<nav class="w-full bg-white py-0 flex items-center text-medium text-gray-grayer justify-between px-8">
    <div class="">
        <img src="{{ asset('img/logo-1.png') }}" alt="">
{{--        <p>Internia</p>--}}
    </div>
    <ul class="lg:flex md:flex hidden items-center">
        <li class=" py-5 mx-10 {{ Request::is('calendar') ? 'border-b-2 border-green text-black' : '' }}"><a href="/calendar">Calender</a></li>
        <li class="py-5 mr-10 {{ Request::is('statistics') ? 'border-b-2 border-green text-black' : '' }}"><a href="/statistics">Statistic</a></li>
        <li class="py-5 mr-10 {{ Request::is('/') ? 'border-b-2 border-green text-black' : '' }}"><a href="/">Employee</a></li>
        <li class="py-5 mr-10 {{ Request::is('client') ? 'border-b-2 border-green text-black' : '' }}"><a href="/client">Client</a></li>
        <li class="py-5 {{ Request::is('equipment') ? 'border-b-2 border-green text-black' : '' }}"><a href="/equipment">Equipment</a></li>
    </ul>
    <ul class="flex items-center justify-between">
        <li class="mr-4">
            <svg class="w-6 text-gray" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        </li>
        <li class="mr-4 relative">
            <div class="absolute p-1 bg-white h-3 w-3 rounded-full">
                <div class="absolute h-1 w-1 rounded-full bg-green"></div>
            </div>

            <svg class="w-6 text-gray" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </li>
        <li>
            <img src="{{ asset('img/p-img.png') }}" alt="">
{{--            <div class="w-8 h-8 rounded-full bg-warning"></div>--}}
        </li>
    </ul>
</nav>
