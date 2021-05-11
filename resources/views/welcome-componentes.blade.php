<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>

.@php
    $color = 'pink';
@endphp

    <body>

        <div class="container mx-auto">
            COMPONENTES DE CLASE x-alert            
            <x-alert>                               {{-- sin titulo ni texto ni color asignado, solo lo por defecto --}}
            </x-alert>
            <br><br>

            <x-alert color="blue">
                <x-slot name="titulo">
                    este es mi titulo                   {{-- esto va al $titulo --}}
                </x-slot>
                Con titulo y color blue                 {{-- esto va al $slot --}}
            </x-alert>
            <br><br>

            <x-alert :color="$color" class="text-2xl font-bold italic mt-2">
                <x-slot name="titulo">
                    Titulo numero 2                     {{-- esto va al $titulo --}}
                </x-slot>
                Con titulo y color pasado por una variable, ademas de agregar classes   {{-- esto va al $slot --}}
            </x-alert>
            <br>

            .@php
                $color = 'yellow';
                $cual_alerta = 'alert2';
            @endphp
            COMPONENTES ANONIMOS x-alert2
            <x-alert2 />
            <br>
            <x-alert2 :color="$color">
                <x-slot name="titulo">
                    Titulo numero 3                     {{-- esto va al $titulo --}}
                </x-slot>
                Con titulo y color pasado por una variable, ademas de agregar classes   {{-- esto va al $slot --}}
            </x-alert2>
            <br>

            COMPONENTES DINAMICOS depende de una variable '$cual_alerta'
            <x-dynamic-component :component='$cual_alerta'>
                <x-slot name="titulo">
                    Titulo numero 4                     {{-- esto va al $titulo --}}
                </x-slot>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor alias recusandae assumenda ex illo corporis nemo quaerat consequuntur, esse omnis odit quibusdam sunt quod numquam, iusto, velit perspiciatis labore vero!          {{-- esto va al $slot --}}
            </x-dynamic-component>

        </div>

    </body>
</html>
