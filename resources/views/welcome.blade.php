<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quizy</title>

        <link rel="icon" href="https://img.icons8.com/doodle/96/000000/quizlet.png"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Главная</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700">Логин</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         width="96" height="96"
                         viewBox="0 0 48 48"
                         style=" fill:#000000;"><path fill="#d6e5e5" d="M34.304,32.248c-0.22-0.15,0.287-0.44,0.427-0.69c1.55-2.62,2.589-5.371,2.789-8.451	c0.18-2.77-0.325-5.08-2.285-7.1c-0.94-0.97-2.185-2.21-3.285-2.99c-1.04-0.74-2.365-1.454-3.585-1.824	c-2.48-0.76-5.322-0.78-7.762,0c-1.22,0.39-2.554,0.998-3.614,1.708c-1.1,0.74-2.37,1.612-3.1,2.722	c-1.32,2.07-2.197,4.076-2.717,6.476c-0.26,1.24-0.575,2.456-0.505,3.726c0.07,1.17,0.081,3.054,0.621,4.114	c0.91,1.8,2.723,4.181,4.463,5.201c2.08,1.22,4.839,1.629,7.219,1.669c2.37,0.03,4.842-0.195,6.752-1.785c0.2-0.17,0.5-0.2,0.7,0	c0.46,0.45,0.687,1.115,1.037,1.655c0.18,0.27,0.34,0.57,0.68,0.62c0.32,0.05,0.73-0.04,1.05-0.07	c1.43-0.12,3.547-0.683,4.957-0.963C37.096,35.004,35.674,33.168,34.304,32.248z M32.596,24c-0.16,1.75-0.661,2.926-1.591,4.386	c-0.1,0.15-0.209,0.194-0.349,0.194c-0.03,0.01-0.06,0-0.09,0h-0.05c-0.09-0.02-0.18-0.05-0.26-0.12	c-0.57-0.5-0.919-1.034-1.329-1.674c-0.21-0.32-0.36-0.7-0.6-1c-0.28-0.36-0.86-0.28-1.29-0.28c-1.47-0.01-3.372,0.386-4.842,0.396	c1.41,1.79,2.482,3.654,3.842,5.484c0.2,0.27,0.396,0.335,0.116,0.415c-3.27,0.98-6.53-0.001-8.5-2.911	c-1.63-2.43-1.705-5.461-0.665-8.111c1.08-2.79,3.225-4.887,6.215-5.317c1.72-0.24,3.747,0.211,5.317,0.931	c1.38,0.63,2.306,1.902,3.066,3.182C32.437,20.996,32.736,22.34,32.596,24z"></path><path fill="#1e4384" d="M43.347,25.048c-0.01-2.49,0.273-4.982,0.543-7.452c0.24-2.28-0.027-5.157-0.737-7.348	c-0.61-1.88-1.878-3.491-3.648-4.451c-2.04-1.1-4.881-1.315-7.141-1.475c-5.03-0.35-10.135-0.61-15.175-0.31	c-2.46,0.15-5.266,0.68-7.646,1.32c-2.19,0.59-3.405,2.494-4.175,4.604c-0.77,2.12-0.79,4.42-0.84,6.65	c-0.04,1.58-0.08,3.17-0.03,4.75c0.04,1.2,0.07,2.4,0.06,3.6c-0.01,2.26-0.15,4.51-0.42,6.75c-0.26,2.18-0.96,4.61-0.3,6.77	c0.33,1.12,1.08,1.94,2.01,2.61c0.91,0.66,1.88,1.38,2.95,1.75c2.24,0.78,4.8,0.4,7.11,0.34c5.1-0.12,10.2-0.13,15.29,0.13	c2.35,0.12,5.249,0.525,7.479-0.385c1.8-0.73,3.519-2.161,4.399-3.881c1.07-2.07,1.114-4.814,0.854-7.064	C43.649,29.546,43.367,27.478,43.347,25.048z M38.318,36.84c-1.91,0.29-3.423,0.737-5.363,0.877c-0.75,0.05-1.33,0.05-1.84-0.59	c-0.39-0.48-0.683-1.298-1.063-1.788c-2.29,1.64-5.249,1.987-7.989,1.847c-2.49-0.13-4.962-0.638-7.042-2.078	c-0.94-0.65-1.678-1.409-2.378-2.309c-0.64-0.83-1.261-1.997-1.651-2.977c-1.01-2.54-0.84-5.024-0.22-7.644	c0.56-2.33,1.25-4.366,2.54-6.396c0.88-1.31,2.061-2.257,3.371-3.117c1.3-0.85,2.808-1.596,4.318-1.986	c2.73-0.71,5.464-0.549,8.104,0.531c1.28,0.52,2.396,1.1,3.486,1.939c1.18,0.91,2.325,1.812,3.256,3.002	c1.79,2.29,2.299,4.998,1.939,7.848c-0.35,2.83-1.638,5.574-3.048,8.014c1.47,1.17,2.499,2.656,3.799,3.986	C38.778,36.25,38.708,36.78,38.318,36.84z"></path><path fill="#1e4384" d="M32.324,23.259c0.021,1.68-0.751,3.631-1.591,5.049c-0.462-0.493-0.857-0.799-1.203-1.397	c-0.493-0.84-0.689-1.422-1.708-1.475c-2.153-0.115-3.486-0.061-5.628-0.155c-0.368-0.021-0.707,0.345-0.466,0.66	c1.48,1.995,2.902,3.482,4.424,5.446c-2.562,0.483-5.884-0.021-7.742-1.901c-1.943-1.963-2.09-5.176-1.47-7.718	c0.651-2.677,2.573-4.946,5.219-5.806c1.617-0.536,3.213-0.389,4.82,0.105c0.777,0.241,1.512,0.494,2.142,1.019	c0.546,0.462,1.071,0.956,1.502,1.533C31.61,19.973,32.303,21.558,32.324,23.259z"></path><path d="M38.83,36.11c-1.3-1.33-2.22-3.03-3.69-4.2c1.41-2.44,2.52-5,2.87-7.83c0.36-2.85-0.19-5.84-1.98-8.13	c-0.93-1.19-2.12-2.14-3.3-3.05c-1.09-0.84-2.24-1.6-3.52-2.12c-2.64-1.08-5.68-0.99-8.41-0.28c-1.51,0.39-2.92,1.04-4.22,1.89	c-1.31,0.86-2.59,1.89-3.47,3.2c-1.29,2.03-2.08,4.22-2.64,6.55c-0.62,2.62-0.75,5.56,0.26,8.1c0.39,0.98,1.08,1.85,1.72,2.68	c0.7,0.9,1.43,1.71,2.37,2.36c2.08,1.44,4.64,2.05,7.13,2.18c2.74,0.14,5.77-0.02,8.06-1.66c0.38,0.49,0.65,1.07,1.04,1.55	c0.51,0.64,1.09,0.64,1.84,0.59c1.94-0.14,3.81-0.7,5.72-0.99C39,36.89,39.07,36.36,38.83,36.11z M33.29,36.91	c-0.32,0.03-0.73,0.12-1.05,0.07c-0.34-0.05-0.5-0.35-0.68-0.62c-0.35-0.54-0.65-1.13-1.11-1.58c-0.2-0.2-0.5-0.17-0.7,0	c-1.91,1.59-4.58,1.74-6.95,1.71c-2.38-0.04-4.78-0.46-6.86-1.68c-1.74-1.02-3.23-2.83-4.14-4.63c-0.54-1.06-0.72-2.43-0.79-3.6	c-0.07-1.27,0.07-2.52,0.33-3.76c0.52-2.4,1.32-4.65,2.64-6.72c0.73-1.11,1.83-1.99,2.93-2.73c1.06-0.71,2.18-1.3,3.4-1.69	c2.44-0.78,5.24-1.02,7.72-0.26c1.22,0.37,2.34,1,3.38,1.74c1.1,0.78,2.2,1.64,3.14,2.61c1.96,2.02,2.72,4.73,2.54,7.5	c-0.2,3.08-1.48,5.89-3.03,8.51c-0.14,0.25-0.04,0.54,0.18,0.69c1.37,0.92,2.23,2.4,3.28,3.66C36.11,36.41,34.72,36.79,33.29,36.91z"></path><path d="M31.75,19.22c-0.76-1.28-1.87-2.63-3.25-3.26c-1.57-0.72-3.45-1.15-5.17-0.91c-2.99,0.43-5.55,2.58-6.63,5.37	c-1.04,2.65-1.07,6.18,0.56,8.61c1.97,2.91,6.04,3.99,9.31,3.01c0.28-0.08,0.5-0.46,0.3-0.73c-1.36-1.83-2.91-3.5-4.32-5.29	c1.47-0.01,2.94-0.13,4.41-0.12c0.43,0,1.01-0.08,1.29,0.28c0.24,0.3,0.39,0.68,0.6,1c0.41,0.64,0.89,1.2,1.46,1.7	c0.08,0.07,0.17,0.1,0.26,0.12h0.05c0.03,0,0.06,0.01,0.09,0c0.14,0,0.29-0.07,0.39-0.22c0.93-1.46,1.67-3.06,1.83-4.81	C33.07,22.31,32.6,20.64,31.75,19.22z M30.58,27.71c-0.44-0.47-0.84-0.96-1.17-1.53c-0.47-0.8-0.79-1.21-1.76-1.26	c-2.05-0.11-4.09,0.18-6.13,0.09c-0.35-0.02-0.66,0.45-0.43,0.75c1.41,1.9,3.02,3.62,4.47,5.49c-2.44,0.46-5.09-0.25-6.86-2.04	c-1.85-1.87-1.99-4.93-1.4-7.35c0.62-2.55,2.45-4.71,4.97-5.53c1.54-0.51,3.06-0.37,4.59,0.1c0.74,0.23,1.44,0.47,2.04,0.97	c0.52,0.44,1.02,0.91,1.43,1.46c0.94,1.29,1.6,2.8,1.62,4.42C31.97,24.88,31.38,26.36,30.58,27.71z"></path><path d="M44.14,28.43c-0.18-2.57-0.22-5.16,0.02-7.73c0.25-2.67,0.77-5.33,0.42-8.01c-0.25-1.98-0.93-3.94-2.17-5.52	c-1.4-1.78-3.39-2.68-5.59-3.02c-2.53-0.38-5.13-0.46-7.68-0.6c-2.7-0.15-5.41-0.25-8.12-0.22c-2.66,0.04-5.32,0.2-7.96,0.57	C10.72,4.22,8.29,4.59,6.6,6.4c-3,3.22-2.65,8.15-2.7,12.23c-0.01,0.81-0.02,1.62,0.01,2.44C4,23.56,4,26.06,3.82,28.56	c-0.09,1.28-0.22,2.56-0.39,3.83C3.27,33.59,3.04,34.79,3,36c-0.03,1.11,0.11,2.23,0.58,3.25c0.46,0.98,1.23,1.72,2.09,2.35	c0.9,0.66,1.85,1.33,2.88,1.76c1.08,0.45,2.28,0.61,3.44,0.64c2.71,0.06,5.44-0.14,8.16-0.17c2.74-0.03,5.5-0.02,8.24,0.06	c2.66,0.08,5.39,0.46,8.04,0.15c2.11-0.24,4.04-1.09,5.56-2.6c1.39-1.38,2.35-3.21,2.62-5.16C44.97,33.7,44.32,31.01,44.14,28.43z M43.49,32.03c0.26,2.25,0.42,4.5-0.65,6.57c-0.88,1.72-2.36,3.15-4.16,3.88c-2.23,0.91-4.72,0.66-7.07,0.54	c-5.09-0.26-10.19-0.25-15.29-0.13c-2.31,0.06-4.87,0.44-7.11-0.34c-1.07-0.37-2.04-1.09-2.95-1.75c-0.93-0.67-1.68-1.49-2.01-2.61	c-0.66-2.16,0.04-4.59,0.3-6.77c0.27-2.24,0.41-4.49,0.42-6.75c0.01-1.2-0.02-2.4-0.06-3.6c-0.05-1.58-0.01-3.17,0.03-4.75	c0.05-2.23,0.07-4.53,0.84-6.65c0.77-2.11,2.27-3.66,4.46-4.25c2.38-0.64,4.94-0.82,7.4-0.97c5.04-0.3,10.1-0.02,15.13,0.33	c2.26,0.16,4.76,0.15,6.8,1.25c1.77,0.96,2.93,2.71,3.54,4.59c0.71,2.19,0.67,4.48,0.43,6.76c-0.27,2.47-0.56,4.91-0.55,7.4	C43.01,27.21,43.21,29.62,43.49,32.03z"></path></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Сделайте свою команду ведущими суперзвездами</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Настройте всю свою команду для проведения потрясающих презентаций с Quizy! 360 Spirit, наш лучший план всего от 16 долларов в месяц.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Настройте свой Quizy с помощью Quizy! темы</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Создайте свой следующий Quizy, чтобы он выглядел и чувствовал себя как ваш бренд, и настройте свой опыт с Quizy! 360 Про Макс
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Кто сказал, что учеба не может быть веселой?</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Quizy!+ Study представляет собой быстрый и гибкий набор инструментов для обучения, который делает обучение более интересным, увлекательным и приятным.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Станьте звездой умножения!</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Умножение превращает таблицу умножения в потрясающую и увлекательную игру.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">--}}
{{--                    <div class="text-center text-sm text-gray-500 sm:text-left">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">--}}
{{--                                Shop--}}
{{--                            </a>--}}

{{--                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">--}}
{{--                                Sponsor--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">--}}
{{--                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </body>
</html>
