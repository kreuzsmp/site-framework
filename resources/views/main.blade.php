<x-templates.main title="{{ $title }}" navcolor="blue">

    <x-slot:header>
        <header class="relative w-full h-screen bg-gradient-to-b from-[rgba(255,98,255,0.05)] to-[rgba(0,133,255,0.1)] backdrop-blur-sm">
            <div id="heroblock" class="container h-full px-4 flex flex-col justify-center mx-auto text-center lg:text-left lg:flex-row lg:items-center">
                <div class="align-middle my-0 w-full">
                    <h1 class="font-bold lg:text-5xl text-4xl text-white-200 tracking-wide leading-tight">Ванильный сервер с небольшими дополнениями</h1>
                    <p class="text-white-300 text-xl my-4 tracking-wide">Погрузитесь в игру без доната и привата. Игра основывается на доверии игроков, интересных дополнениях и РП составляющей сервера. Дай волю своей фантазии и трансформируй мир своим присутствием!</p>
                    <span class="text-xl text-white-200">1.21.1 Лицензия не обязательна</span>
                    <div class="flex flex-row items-center mt-4 justify-between">
                        @auth()
                            <a href="dashboard" class="relative z-20 py-4 px-20 text-xl text-white-100 block bg-pirpblu rounded-3xl tracking-wide max-lg:mx-auto hover:scale-105 transition-all">Приобрести</a>
                        @else
                            <a href="login" class="relative z-20 py-4 px-20 text-xl text-white-100 block bg-pirpblu rounded-3xl tracking-wide max-lg:mx-auto hover:scale-105 transition-all">Приобрести</a>
                        @endauth
                    </div>
                </div>
                <div class="w-full max-lg:hidden flex justify-end">
                    <img class="w-3/4" src="{{ Vite::asset('resources/images/hero-image.png') }}" alt="">
                </div>

            </div>
            <div class="absolute bottom-0 w-full h-48 z-0 bg-gradient-to-t from-[rgba(0,133,255,0.3)] to-transparent">
            </div>
        </header>
    </x-slot:header>
    <x-slot:content>
        <div class="text-white-200 pt-12">
            <div class="w-full p-4 pb-6 bg-bg-black rounded-3xl">
                <h2 class="text-5xl font-bold">Новости</h2>
                <p class="pt-2 text-3xl leading-tight">
                    Второй сезон начался, ждем тебя!
                </p>
                <div class="w-full h-4 mt-4 rounded-full bg-pirpblu"></div>
            </div>
        </div>
        <div class="mt-24 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 container mx-auto">
            <div class="bg-bg-black p-4 pb-6 rounded-3xl w-full flex flex-col justify-between gap-4">
                <div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ Vite::asset('resources/images/icon1.png') }}" alt="">
                        <h2 class="text-3xl font-semibold">Свобода действий!</h2>
                    </div>
                    <p class="text-xl text-white-300 my-2">Свергайте, выбирайте президента или короля сервера, принимайте законы для игроков и предлагайте свои идеи! У нас нет навязчивых правил — все основано на судебной системе и системе штрафов!</p>
                </div>
                <img lazy src="https://i.imgur.com/71zXI14.png" class="rounded-3xl relative bottom-0">
                <a href="https://kreuzsmp.gitbook.io/kreuzwiki" class="w-full py-3 border border-white-200 rounded-3xl text-center hover:scale-105 transition-all">Читать на вики</a>
            </div>
            <div class="bg-bg-black p-4 pb-6 rounded-3xl w-full flex flex-col justify-between gap-4">
                <div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ Vite::asset('resources/images/icon2.png') }}" alt="">
                        <h2 class="text-3xl font-semibold">Интерактивный сайт</h2>
                    </div>
                    <p class="text-xl text-white-300 my-2">Личный кабинет игрока обеспечивает доступ к банковской системе для управления финансами, документы игрока (включая лицензии и паспорта), настройки профиля и статистики, систему уведомлений о важных событиях, а также дополнительные страницы, форум и техническую поддержку, обеспечивая удобное и безопасное управление игровым опытом.</p>
                </div>
                <img lazy src="https://i.imgur.com/V6zT2Mi.png" class="rounded-3xl relative bottom-0">
                <a href="https://kreuzsmp.gitbook.io/kreuzwiki" class="w-full py-3 border border-white-200 rounded-3xl text-center hover:scale-105 transition-all">Читать на вики</a>
            </div>
            <div class="bg-bg-black p-4 pb-6 rounded-3xl w-full flex flex-col justify-between gap-4">
                <div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ Vite::asset('resources/images/icon3.png') }}" alt="">
                        <h2 class="text-3xl font-semibold">Состав администрации</h2>
                    </div>
                    <p class="text-xl text-white-300 my-2">Наша администрация — это команда, созданная для обеспечения комфортной и безопасной игровой среды. Мы верим в демократический подход и взаимодействие с игроками.</p>
                </div>
                <img lazy src="https://i.imgur.com/XzHbowf.png" class="rounded-3xl relative bottom-0">
                <a href="https://kreuzsmp.gitbook.io/kreuzwiki" class="w-full py-3 border border-white-200 rounded-3xl text-center hover:scale-105 transition-all">Читать на вики</a>
            </div>
            <div class="bg-bg-black p-4 pb-6 rounded-3xl w-full flex flex-col justify-between gap-4">
                <div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ Vite::asset('resources/images/icon4.png') }}" alt="">
                        <h2 class="text-3xl font-semibold">Необычные дополнения</h2>
                    </div>
                    <p class="text-xl text-white-300 my-2">Седла на игроках, отключенные никнеймы над головой и др. призванные для улучшения игрового процесса — вам не будет скучно на протяжении всего сезона! Голосовой чат и эмоции помогут вам комуницировать с другими игроками.</p>
                </div>
                <img lazy src="https://i.imgur.com/NWbawwa.png" class="rounded-3xl relative bottom-0">
                <a href="https://kreuzsmp.gitbook.io/kreuzwiki" class="w-full py-3 border border-white-200 rounded-3xl text-center hover:scale-105 transition-all">Читать на вики</a>
            </div>
        </div>


        <h1 class="text-3xl font-bold text-center mt-24 mb-6">Не уверен в покупке проходки?</h1>
        <div class="w-full">
            <div class="overflow-hidden w-full">
                <div class="flex animate-scrolling-gallery-reverse">
                    <!-- Галерея изображений №1 -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
            <div class="overflow-hidden w-full">
                <div class="flex animate-scrolling-gallery">
                    <!-- Галерея изображений №2-->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg1.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <!-- Дублирование изображений для бесконечной прокрутки -->
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg5.png') }}" alt="Image 5" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg4.png') }}" alt="Image 4" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg3.png') }}" alt="Image 3" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 2" class="rounded-lg shadow-md">
                    </div>
                    <div class="flex-shrink-0 w-64 p-2">
                        <img lazy src="{{ Vite::asset('resources/images/bg2.png') }}" alt="Image 1" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 flex flex-col lg:flex-row justify-between gap-12 lg:min-h-[820px]">
            <div class="w-full lg:w-4/5">
                <h2 class="text-5xl font-bold">FAQ</h2>
                <details class="border-b border-white-400 py-4">
                    <summary class="text-xl font-semibold">Как попасть на сервер?</summary>
                    <p class="mt-2">Следует приобрести проходку, но на данный момент проходит акция, по которой у вас есть возможность попасть бесплатно! Перейдите в дискорд сервер, там есть вся информация.</p>
                </details>
                <details class="border-b border-white-400 py-4">
                    <summary class="text-xl font-semibold">Java или Bedrock? Какая версия?</summary>
                    <p class="mt-2">Наш сервер поддерживает только Java издание Minecraft версии 1.21.1</p>
                </details>
                <details class="border-b border-white-400 py-4">
                    <summary class="text-xl font-semibold">Где узнать IP сервера?</summary>
                    <p class="mt-2">IP указан в личном кабинете -> Профиль. А так же на дискорд сервере в канале #Информация.</p>
                </details>
                <details class="border-b border-white-400 py-4">
                    <summary class="text-xl font-semibold">Когда вайп?</summary>
                    <p class="mt-2">Вайп происходит при слиянии большинства обстоятельств, как полностью достингнутый прогресс Ивентов сервера, и иных механик, и при наличии актуального обновления! Мы договариваемся о таких делах заранее, внезапного отключения не будет.</p>
                </details>
                <details class="py-4">
                    <summary class="text-xl font-semibold">Что за Kreuz+?</summary>
                    <p class="mt-2">Спонсорская подписка, которую можно преобрести за 169 рублей, она дает мало преимуществ, это больше для поддержки сервера и выделения себя среди других игроков!</p>
                </details>
            </div>

            <div class="w-full lg:w-4/5block">
                <div class="bg-bg-dark rounded-3xl">
                    <div class="flex flex-row">
                        <div class="basis-full lg:basis-2/3">
                            <div class="p-8">
                                <h1 class="text-4xl font-bold">Хочу попробовать!</h1>
                                <p class="text-xl text-white-300 my-2">Погрузись в мир приключений и безграничных идей в месте с друзьями, или найди на сервере себе друга.</p>
                                <span class="text-xl text-white-200 my-4">1.21.1 Лицензия не обязательна</span>
                            </div>
                            <a href="#heroblock" class="w-full inline-block text-center py-4 text-2xl transition-all font-semibold bg-pirpblu rounded-bl-xl max-lg:rounded-b-xl">249₽</a>
                        </div>
                        <div class="max-lg:hidden w-full h-[inherit] rounded-r-xl bg-hero-image bg-cover">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-12 max-lg:mt-12 grow-0">
            <div class="border border-white-400 h-28 bg-bg-black text-4xl transition-all hover:scale-105 transform-gpu rounded-2xl">
                <a href="{{ route('socials.discord-server') }}" class="w-full h-full flex justify-center items-center">
                    <i class="fa-brands fa-discord text-[#5865f2]"></i>
                </a>
            </div>
            <div class="border border-white-400 h-28 flex justify-center items-center bg-white-200 text-4xl transition-all hover:scale-105 transform-gpu rounded-2xl">
                <a href="{{ route('socials.youtube') }}" class="w-full h-full flex justify-center items-center">
                    <i class="fa-brands fa-youtube text-[#ED1D24]"></i>
                </a>
            </div>
            <div class="border border-white-400 h-28 bg-white-150 text-4xl transition-all hover:scale-105 transform-gpu rounded-2xl">
                <a href="{{ route('socials.tiktok') }}" class="w-full h-full flex justify-center items-center">
                    <i class="fa-brands fa-tiktok text-bigBlac"></i>
                </a>
            </div>
            <div class="border border-white-400 h-28 bg-blu text-4xl transition-all hover:scale-105 transform-gpu rounded-2xl">
                <a href="{{ route('socials.telegram') }}" class="w-full h-full flex justify-center items-center">
                    <i class="fa-brands fa-telegram"></i>
                </a>
            </div>
        </div>
    </x-slot:content>
</x-templates.main>
