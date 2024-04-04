<div class="-translate-x-[200%] mobile-menu fixed w-full h-screen z-10 bg-black duration-500 transition-ease-def">
    <div class="mt-[33%] mx-10 flex flex-col">
        {{ $mobmenu }}
    </div>
    <hr class="border-darkgray my-10">
    <div class="w-4/5 mx-auto flex flex-col items-center">
        @auth()
            <a href="dashboard" class="text-center text-2xl py-4 font-extrabold focus:text-purple transition-colors uppercase">Настройки</a>
            <a href="logout" class="text-center text-2xl py-4 font-extrabold focus:text-purple transition-colors uppercase">Выйти</a>
        @else
            <a href="login" class="text-center mt-12 font-extrabold text-2xl font-semibold inline-block bg-purple p-2.5 rounded-xl w-full mx-auto transition-ease-def duration-350 fill-white focus:bg-white focus:text-black transition-all focus:ring-4 ring-white ring-offset-4 ring-offset-transparent">
                Авторизироваться
            </a>
        @endauth

    </div>
</div>

<nav class="flex flex-row md:justify-between pt-6 pb-4">
    <div class="logo z-20 p-3 bg-darkgray rounded-xl -mt-1.5 block left-5 absolute inline-block md:hidden">
        <svg class="size-8 md:size-10" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.312 0.295898H36.1023C38.8409 0.295898 41.0611 2.51589 41.0611 5.25405C41.0611 5.70296 40.9691 6.13081 40.8033 6.5201C40.5683 7.06984 40.0474 7.43895 39.4555 7.524C37.8324 7.7581 35.6928 8.97244 33.7768 10.8873C30.8629 13.8017 29.5704 17.2395 30.8857 18.5766L30.9822 18.6678C32.3703 19.8637 35.7349 18.5678 38.5962 15.7069C40.4815 13.8219 41.6881 11.7176 41.9485 10.1043C42.0336 9.57828 42.3326 9.1022 42.807 8.85846C43.2455 8.634 43.7418 8.50687 44.267 8.50687H44.3337C47.0599 8.50687 49.2706 10.7172 49.2706 13.4431V36.2523C49.2706 38.9782 47.0599 41.1885 44.3337 41.1885H44.267C43.7962 41.1885 43.3481 41.0868 42.9456 40.9036C42.4089 40.6598 42.0441 40.1513 41.9635 39.5674C41.739 37.941 40.5219 35.7885 38.5962 33.8622C35.6762 30.9426 32.2335 29.652 30.8997 30.9776L30.8699 31.0075C29.58 32.3568 30.8717 35.7771 33.7768 38.681C35.6954 40.5994 37.8412 41.8154 39.4643 42.0451C40.0448 42.1276 40.5552 42.4888 40.7937 43.0254C40.9647 43.4103 41.0603 43.8355 41.0603 44.2835V46.3019C41.0603 47.8424 39.9378 49.1189 38.4664 49.3566C38.3814 49.3706 38.2945 49.375 38.2086 49.375H11.2039C11.118 49.375 11.0312 49.3706 10.9461 49.3566C9.47468 49.1181 8.35226 47.8415 8.35226 46.3019V44.2835C8.35226 43.8346 8.44784 43.4076 8.61971 43.0227C8.85823 42.4897 9.36332 42.1284 9.94119 42.0443C11.5634 41.8093 13.7039 40.595 15.6182 38.681C18.5049 35.7946 19.7992 32.3998 18.5461 31.0329L18.5049 30.9882C18.5031 30.9864 18.5031 30.9882 18.5049 30.9882C17.1738 29.6572 13.7206 30.9408 10.7988 33.8622C8.86875 35.792 7.65163 37.9497 7.42977 39.5762C7.34822 40.1715 6.98344 40.6993 6.431 40.9352C6.04955 41.0982 5.62864 41.1885 5.18757 41.1885H3.30225C1.72823 41.1885 0.421669 40.0391 0.179647 38.5319C0.165617 38.4469 0.162109 38.361 0.162109 38.2742V11.3985C0.162109 11.3125 0.166494 11.2257 0.179647 11.1407C0.421669 9.63439 1.72823 8.48407 3.30225 8.48407H5.18757C5.63478 8.48407 6.06095 8.57701 6.44678 8.74447C6.98519 8.97857 7.35173 9.48535 7.44117 10.0658C7.68846 11.6834 8.89856 13.807 10.7988 15.706C13.668 18.5748 17.044 19.8707 18.4242 18.6555L18.5382 18.5459C19.8053 17.1869 18.511 13.7807 15.6182 10.8882C13.7092 8.97945 11.5748 7.76599 9.95346 7.52751C9.36332 7.44071 8.84595 7.07159 8.61094 6.52361C8.44434 6.13433 8.35226 5.70559 8.35226 5.25493C8.35226 2.51677 10.5725 0.296776 13.3111 0.296776L13.312 0.295898Z" fill="url(#paint0_linear_642_143)"/><defs><linearGradient id="paint0_linear_642_143" x1="8.51055" y1="3.73143" x2="35.9861" y2="53.3152" gradientUnits="userSpaceOnUse"><stop stop-color="#E5E3E3"/><stop offset="1" stop-color="#7F7E7E"/></linearGradient></defs></svg>
    </div>
    <div class="absolute z-20 w-full right-10 flex justify-end md:hidden mobile-toggler">
        <svg class="size-12 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"/></svg>
    </div>
    <div class="hidden md:flex flex-row items-center">
        {{ $menu }}
    </div>
    <div class="hidden md:block font-extrabold text-xl">
        @auth()
            <div id="accountIcon" class="select-none inline-block bg-purple py-2 px-4 rounded-xl hover:bg-white transition-ease-def duration-350 hover:text-black align-middle cursor-pointer">
                @if(!empty(Auth::user()->avatar))
                    <img src="{{ Auth::user()->avatar }}" alt="Аватарка" class="rounded-full size-8 inline-block">
                @endif
                <p class="inline-block pl-2 align-top">{{ Auth::user()->name }}</p>
            </div>
            <div class="scale-0 transition-all absolute border-2 border-darkgray w-[130px] mt-4 rounded-xl p-2 text-lg font-semibold bg-darkgray" id="accountmenu">
                <a href="dashboard" class="py-2 block transition transition-all hover:text-lightgray">Настройки</a>
                <a href="logout" class="py-2 block transition transition-all hover:text-lightgray">Выйти</a>
            </div>
        @else
            <a href="login" class=" cursor-pointer inline-block bg-purple py-2 px-4 rounded-xl hover:bg-white transition-ease-def duration-350 hover:text-black uppercase">
                Войти
            </a>
        @endauth

    </div>
</nav>
