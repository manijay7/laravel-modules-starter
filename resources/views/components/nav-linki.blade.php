@props(['active', 'leftIcon' => null, 'rightIcon' => null, 'route' => null])

@php
$classes = ($active ?? false)
? "border-l-4 border-primary text-primary hover:text-primary-dark group"
: "border-l-4 border-transparent text-gray-500 dark:text-light hover:text-primary-light dark:hover:border-primary-light
hover:bg-primary-100 dark:hover:bg-primary
dark:hover:text-light
group";

@endphp




<!-- home -->
<li {{ $attributes->merge(['class' => 'h-8 space-y-10 w-full rounded-xs flex items-center leading-5 transition
    duaration-200 focus:outline-none focus:text-primary-700 focus:border-primary-300 cursor-pointer ' .
    $classes]) }}>

    <a href="{{$route}}" class="flex flex-row ml-1 mr-2 text-sm font-medium items-center">
        <span>
            {{$leftIcon }}
        </span>
        <span class="ml-2">
            {{$slot}}
        </span>
    </a>

    <span class="ml-auto">
        {{$rightIcon}}
    </span>
</li>