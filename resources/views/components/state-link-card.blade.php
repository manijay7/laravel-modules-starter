@props(['name' => null, 'value' => null, 'percentage' => null, 'icon' => null, 'percentColor' => null, 'positive' =>
false, 'right' => null ])


@php
switch ($positive) {
case true:
$percentageIcon = 'bx-up-arrow-alt';
$percentageClass = 'green';
$percentageSign = '+';
break;
case false:
$percentageIcon = 'bx-down-arrow-alt';
$percentageClass = 'red';
$percentageSign = '-';
break;

}
@endphp


<div {{$attributes->merge(['class' =>"flex flex-wrap mb-2" ])}}>
    <div class="w-full">
        <div class="bg-white my-2 mx-2 border rounded-md flex-col flex h-40">
            <div class="px-4 py-3  flex-auto">
                <div class="flex justify-between">
                    <div class="text-gray-600 text-sm">{{$name}}</div>
                    <div class="relative inline-block text-left text-sm">
                        {{$right}}
                    </div>
                </div>
                <div>
                    <div class="text-3xl inline font-medium text-gray-700">
                        {{$value}}
                    </div>
                    <span class="text-sm text-{{$percentageClass}}-500">{{$percentageSign}}{{$percentage}} <i
                            class="bx {{$percentageIcon}}"></i></span>
                </div>
            </div>

            {{$slot}}
        </div>
    </div>

</div>
<!-- End Content chart 1 -->