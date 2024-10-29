<x-templates.main title="{{ $title }}" navcolor="blue">
    <x-slot:content>
        <main class="container mx-auto my-32">
            <h1 class="text-center text-5xl font-semibold">Спасибо за покупку!</h1>
            <p class="text-light-100 text-center text-2xl mt-8">
                IP: <span onclick="copyToClipboard()" class="text-lightgray active:text-light-100 transition-all duration-150 select-none cursor-pointer">kreuzsmp.ru
                    <svg class="size-6 inline-block align-top" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24"/>
                <rect x="4" y="8" width="12" height="12" rx="1" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 6V5C8 4.44772 8.44772 4 9 4H19C19.5523 4 20 4.44772 20 5V15C20 15.5523 19.5523 16 19 16H18" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
            </svg>
                </span>
            </p>

        </main>
        <script>
            function copyToClipboard() {
                navigator.clipboard.writeText('kreuzsmp.ru')
            }
        </script>
    </x-slot:content>
</x-templates.main>
