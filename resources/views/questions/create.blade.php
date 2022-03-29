<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Создать тест') }}--}}
{{--        </h2>--}}
    </x-slot>

    <div class="py-12">
        <div class="px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
            <div class="row">
                <div class="w-full lg:w-3/4">
                    <div class="lg:mt-12 subscribe-content">
                        <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                            Добавить вопросы
{{--                            <span class="block font-normal">создайте свой!</span>--}}
                        </h2>
                    </div>
                </div>
                <div class="w-full lg:w-3/4">
                    <div class="mt-12 subscribe-form">
                        <form action="{{ route('questions.store', ['id' => $id]) }}" class="relative focus:outline-none" method="POST">
                            @csrf
                            <input type="text" name="text" placeholder="Введите вопрос" class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                            <div class="mt-5">
                                <input type="text" name="variant1" placeholder="Введите вариант 1" class="w-full mt-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                <input type="text" name="variant2" placeholder="Введите вариант 2" class="w-full mt-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                <input type="text" name="variant3" placeholder="Введите вариант 3" class="w-full mt-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                <input type="text" name="variant4" placeholder="Введите вариант 4" class="w-full mt-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                            </div>
                            <div class="mt-4 xl:w-96">
                                <select name="answer" class="form-select appearance-none
                                              block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              bg-white bg-clip-padding bg-no-repeat
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              duration-300 border-2 rounded focus:border-theme-color focus:outline-none" aria-label="Default select example">
                                    <option selected value="{{ null }}">Выберите правильный вариант</option>
                                    <option value="1">Вариант 1</option>
                                    <option value="2">Вариант 2</option>
                                    <option value="3">Вариант 3</option>
                                    <option value="3">Вариант 4</option>
                                </select>
                            </div>
                            <x-button class="mt-5">
                                {{ __('Добавить') }}
                            </x-button>
                        </form>
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
