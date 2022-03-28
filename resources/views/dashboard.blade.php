<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
            <div class="grid grid-cols-12 divide-x">
                <div class="col-span-7">
                    <div class="row">
                        <div class="w-full lg:w-3/4">
                            <div class="lg:mt-12 subscribe-content">
                                <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                                    Введите код
                                    <span class="block font-normal">для присоединения к тесту</span>
                                </h2>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/4">
                            <div class="mt-12 subscribe-form">
                                <form action="#" class="relative focus:outline-none">
                                    <input type="text" placeholder="Введите код" class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                    <x-button class="mt-5">
                                        {{ __('Присоединиться') }}
                                    </x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-5 pl-12">
                    <div class="row">
                        <div class="w-full lg:w-3/4">
                            <div class="lg:mt-12 subscribe-content">
                                <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                                    Или
                                    <span class="block font-normal">создайте свой!</span>
                                </h2>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mt-12 subscribe-form">
                                <form action="#" class="relative focus:outline-none">
                                    <input type="text" placeholder="Введите название" class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                    <x-button class="mt-5">
                                        {{ __('Создать') }}
                                    </x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Вы вошли в систему!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</x-app-layout>
