<x-templates.main>
    <x-slot:content>
        <header class="h-screen bg-hero-bg bg-no-repeat bg-cover bg-center">
            <div class="h-full container mx-auto">{{--HERO блок--}}
                <x-menu>
                    <x-slot:menu>
                        @foreach($menu as $item => $url)
                            <a href="{{ $url }}" class="text-2xl mr-6 font-extrabold uppercase hover:text-purple transition-colors duration-350 transition-ease-def">{{ $item }}</a>
                        @endforeach
                    </x-slot:menu>
                    <x-slot:mobmenu>
                        @foreach($menu as $item => $url)
                            <a href="{{ $url }}" class="text-center text-2xl py-4 font-extrabold focus:text-purple transition-colors uppercase">{{ $item }}</a>
                        @endforeach
                    </x-slot:mobmenu>
                </x-menu>
                <div class="w-full h-1/2 flex flex-row justify-between max-md:mt-16">
                    <div class="h-full basis-full md:basis-1/2 flex flex-col justify-center animate-hero-translate mx-4 md:mx-0">
                        <h1 class="text-7xl font-bold italic text-center md:text-left">KREUZ SMP</h1>
                        <p class="mt-3 font-medium text-light-200 text-2xl max-w-[30ch] md:max-w-[45ch] text-center md:text-left mx-auto md:mx-0">Ванильный сервер Minecraft с небольшими дополнениями, призванными улучшить ваш опыт игры. </p>
                    </div>
                    <div class="h-full basis-0 md:basis-1/2">
                    </div>
                </div>
            </div>
            {{--            <div class="absolute inset-x-0 mx-auto bottom-20 size-12 bg-purple animate-bounce"></div>--}}
        </header>
        <section class="w-4/5 2xl:w-3/5 mx-auto mt-64 mb-16 rounded-2xl border-4 border-lightgray p-4 pt-6 md:p-8 xl:grid xl:grid-cols-2 relative">
            <div>
                <h2 class="block max-md:text-center text-4xl md:text-5xl uppercase font-bold md:inline-block align-middle">Как зайти?</h2>
                <p class="text-lightgray text-lg md:text-2xl mt-4 text-balance max-md:text-center">Для входа в игру вам нужно будет приобрести доступ по кнопке ниже и вы автоматически будете добавлены в вайтлист сервера. Актуальная версия 1.20.4 Java edition. Играть можно как с Лицензии так и с Пиратки. Ждем вас!</p>
                <div class="mt-4 hidden md:none">
                    <span class="inline-block p-2 pb-3 text-xl rounded-xl bg-darkgray select-none">1.20.4 Java edition</span>
                    <span class="inline-block p-2 pb-3 text-xl rounded-xl bg-darkgray ml-3 select-none">Лицензия или пиратка</span>
                </div>
                <div class="mt-6 md:mt-16">
                    <a href="/dashboard" class="inline-block bg-darkgray uppercase p-3 text-lg md:text-2xl font-bold rounded-xl max-md:w-full md:mr-4 hover:bg-lightgray duration-350 transition-all focus:ring-4 ring-lightgray ring-offset-4 ring-offset-transparent">Приобрести</a>
                    <svg class="w-10 h-px hidden md:inline-block align-super mr-4" viewBox="0 0 41 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="41" y2="0.5" stroke="white"/>
                    </svg>
                    <span class="text-2xl hidden md:inline">{{ $cost }}₽</span>
                </div>
            </div>
            <div class="hidden xl:block">
                <img src="{{ Vite::asset('resources/images/model.webp') }}" class="absolute max-w-md bottom-0 right-0">
            </div>
        </section>
    </x-slot:content>
</x-templates.main>
