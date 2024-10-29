<x-templates.main title="Ошибка 503" navcolor="blue">
    <x-slot:content>
        <style>
            footer {
                display: none;
            }
            nav {
                display: none;
            }
        </style>

        <div class="w-full h-screen flex justify-center items-center">
            <div class="text-center">
                <h1 class="font-semibold text-5xl">Ошибка 503: техработы (Service Unavailable)</h1>
                <p class="mt-4 text-xl">На сервере ведутся технические работы, зайдите позже!</p>
            </div>
        </div>
    </x-slot:content>
</x-templates.main>
