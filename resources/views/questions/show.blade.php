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
                            Тест: {{ data_get($quiz, 'name') }}
{{--                            <span class="block font-normal">создайте свой!</span>--}}
                        </h2>
                    </div>
                </div>
                <div class="w-full lg:w-3/4">
                    <div class="lg:mt-12 subscribe-content">
                        <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                            Вопрос: {{ data_get($question, 'text') }}
                            {{--                            <span class="block font-normal">создайте свой!</span>--}}
                        </h2>
                    </div>
                </div>
                <div class="w-full lg:w-3/4">
                    <div class="mt-3 subscribe-form">
                        @foreach(range(1,4) as $number)
                            <div class="px-6 pt-3 pb-5 mb-3 bg-white rounded-lg shadow-xl subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="row">
                                    <div class="w-full lg:w-3/4">
                                        <div class="lg:mt-5 subscribe-content">
                                            <p class="text-xl subscribe-title">
                                                Вариант {{ $number }}: {{ data_get($question, 'variant' . $number) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="px-6 pt-3 pb-5 mb-3 bg-white rounded-lg shadow-xl subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <div class="row">
                                <div class="w-full lg:w-3/4">
                                    <div class="lg:mt-5 subscribe-content">
                                        <p class="text-xl subscribe-title">
                                            Правильный ответ: вариант {{ data_get($question, 'answer') }}
                                        </p>
                                    </div>
                                </div>
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
