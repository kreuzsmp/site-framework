<x-templates.main>
    <x-slot:content>
        <header class="w-full">
            <div class="container mx-auto">
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
            </div>
        </header>
        <section class="container mx-auto mt-14">
            <div class="w-full lg:w-1/2 mx-auto bg-darkergray p-12 md:rounded-3xl">
                <h1 class="text-5xl font-bold text-center">Ваш аккаунт</h1>
                @if(Auth::user()->whitelisted)
                    <div class="mt-6">
                        <h2 class="text-3xl text-light-100">Вы есть в вайтлисте!</h2>
                        <p class="text-2xl mt-2 text-light-100">Ваш ник в игре: <span class="text-lightgray">{{ Auth::user()->nickname }}</span></p>
                        <p class="text-light-100 text-2xl mt-2">
                            IP: <span onclick="copyToClipboard()" class="text-lightgray active:text-light-100 transition-all duration-150 select-none cursor-pointer">kreuzsmp.ru
                    <svg class="size-6 inline-block align-top" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24"/>
                <rect x="4" y="8" width="12" height="12" rx="1" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 6V5C8 4.44772 8.44772 4 9 4H19C19.5523 4 20 4.44772 20 5V15C20 15.5523 19.5523 16 19 16H18" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
            </svg>
                </span>
                        </p>
                    </div>
                @else
                    <div class="min-h-6 flex flex-row mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" id="reloader" class="fill-white align-middle h-6 inline-block mr-2 cursor-pointer" viewBox="0 -960 960 960" width="24"><path d="M160-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T400-790v84q-72 26-116 88.5T240-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H160Zm400-10v-84q72-26 116-88.5T720-482q0-45-17-87.5T650-648l-10-10v98h-80v-240h240v80H690l16 14q49 49 71.5 106.5T800-482q0 111-66.5 197.5T560-170Z"/></svg>
                        <p id="checkds" class="inline-block text-base text-light-100"><svg class="h-6 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_nOfF{animation:spinner_qtyZ 2s cubic-bezier(0.36,.6,.31,1) infinite}.spinner_fVhf{animation-delay:-.5s}.spinner_piVe{animation-delay:-1s}.spinner_MSNs{animation-delay:-1.5s}@keyframes spinner_qtyZ{0%{r:0}25%{r:3px;cx:4px}50%{r:3px;cx:12px}75%{r:3px;cx:20px}100%{r:0;cx:20px}}</style><circle class="spinner_nOfF" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_fVhf" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_piVe" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_MSNs" cx="4" cy="12" r="3"/></svg></p>
                    </div>
                    <a href="https://discord.gg/UNzBXyMYwX" id="dsButton" class="hidden mt-3 cursor-pointer inline-block bg-purple uppercase p-2 text-lg md:text-lg font-bold rounded-xl max-md:w-full md:mr-4 hover:bg-white hover:text-black transition-ease-def duration-350 fill-white focus:bg-white focus:text-black transition-all focus:ring-4 ring-white ring-offset-4 ring-offset-transparent">Зайти на сервер</a>
                    <form action="/dashboard/buy" class="mt-4 selection:bg-black" method="POST">
                        @csrf
                        <p class="font-semibold text-xl">Ваш ник в игре</p>
                        <input type="text" placeholder="OG_pampers" class="selection:bg-black/75 bg-darkgray font-mono rounded-xl mt-2" name="nickname" value="{{ old('nickname') }}">
                        <p class="font-semibold text-xl mt-4">Промокод (если есть)</p>
                        <input type="text" placeholder="Ваш промокод" class="selection:bg-black/75 bg-darkgray font-mono rounded-xl mt-2" name="coupon" value="{{ old('coupon') }}"><br>
                        <button type="submit" id="buyButton" class="disabled:opacity-50 mt-6 disabled:cursor-default cursor-pointer bg-purple uppercase p-2 text-lg md:text-lg font-bold rounded-xl max-md:w-full md:mr-4 hover:bg-white hover:text-black transition-ease-def duration-350 fill-white focus:bg-white focus:text-black -disabled:transition-all focus:ring-4 ring-white ring-offset-4 ring-offset-transparent">Оплатить</button>
                    </form>
                @endif
            </div>
        </section>
        <script>
            let stub = document.getElementById('checkds');
            let dsbutton = document.getElementById('dsButton');
            let formContainer = document.getElementById('formContainer');
            let buyButton = document.getElementById('buyButton');

            (async () => check())();

            async function check() {
                stub.innerHTML = "<svg class=\"h-6 fill-white\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><style>.spinner_nOfF{animation:spinner_qtyZ 2s cubic-bezier(0.36,.6,.31,1) infinite}.spinner_fVhf{animation-delay:-.5s}.spinner_piVe{animation-delay:-1s}.spinner_MSNs{animation-delay:-1.5s}@keyframes spinner_qtyZ{0%{r:0}25%{r:3px;cx:4px}50%{r:3px;cx:12px}75%{r:3px;cx:20px}100%{r:0;cx:20px}}</style><circle class=\"spinner_nOfF\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_fVhf\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_piVe\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_MSNs\" cx=\"4\" cy=\"12\" r=\"3\"/></svg>"
                let res = await fetch('/check-ds', {
                    headers: {
                        'X-IS-DISCORD-ID-REQUEST': true
                    }
                })
                let s = await res.text()
                if (s == "true") {
                    stub.innerHTML="Вы есть на Discord-сервере!";
                    dsbutton.classList.replace('scale-100', 'hidden');
                    buyButton.removeAttribute('disabled');
                } else {
                    stub.innerHTML="Вас нет на Discord-сервере, самое время зайти! (обязательно)";
                    dsbutton.classList.replace('hidden', 'scale-100');
                    buyButton.setAttribute('disabled', 'disabled');
                }

            }
            let reloader = document.getElementById('reloader');
            reloader.onclick = function () {
                reloader.classList.add('scale-150', 'animate-around-loader')
                check()
            }
            reloader.onanimationend = function () {
                reloader.classList.remove('scale-150', 'animate-around-loader')
            }
        </script>
        @if($errors->any())
            <div class="absolute right-2 bottom-2 max-lg:left-2 lg:right-10 lg:bottom-20 text-center">
                @foreach($errors->all() as $error)
                    <div class="bg-red-700 p-2 my-2 rounded-xl">
                        <p>{{ $error }}</p>
                    </div>
                @endforeach
            </div>
        @endif
        <script>
            function copyToClipboard() {
                navigator.clipboard.writeText('kreuzsmp.ru')
            }
        </script>
    </x-slot:content>
</x-templates.main>
