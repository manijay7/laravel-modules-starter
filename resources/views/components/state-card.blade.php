@props(['name' => null, 'value' => null, 'percentage' => null, 'icon' => null, 'percentColor' => null])


<div {{$attributes->merge(['class' => 'flex items-center justify-between p-4 rounded-md dark:bg-darker'])}} >
    <div>
        <h6 class="text-xs font-medium leading-none tracking-wider uppercase dark:text-primary-light">
            {{$name}}
        </h6>
        <span class="text-xl font-semibold">{{$value}}</span>
        <span
            class="inline-block px-2 py-px ml-2 text-xs text-{{$percentColor}}-500 bg-{{$percentColor}}-100 rounded-md">
            {{$percentage}}
        </span>
    </div>
    <div>
        <span>

            {{$icon}}
        </span>
    </div>
</div>