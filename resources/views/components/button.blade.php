@props(['type' => 'button', 'color' => 'primary', 'outline'])

@php



switch ($color) {
case 'primary':
$classes = 'bg-primary hover:bg-primary-dark hover:text-primary-ligther focus:shadow-outline-primary active:bg-primary
';
break;
case 'success':
$classes = 'bg-success hover:bg-success-dark hover:text-success-ligther focus:shadow-outline-success active:bg-success';
break;
case 'danger':
$classes = 'bg-danger hover:bg-danger-dark hover:text-danger-ligther focus:shadow-outline-danger active:bg-danger';
break;
case 'warning':
$classes = 'bg-warning hover:bg-warning-dark hover:text-warning-ligther focus:shadow-outline-warning active:bg-warning';
break;
case 'info':
$classes = 'bg-info hover:bg-info-dark hover:text-info-ligther focus:shadow-outline-info active:bg-info';
break;
case 'secondary':
$classes = 'bg-secondary hover:bg-secondary-dark hover:text-secondary-ligther focus:shadow-outline-secondary
active:bg-secondary';
break;

default:
$classes= '';
break;
}





// $outlineClasses = ($outline ?? false)
// ? "bg-transparent border-warning text-warning hover:bg-warning-500 focus:border-warning focus:shadow-outline-warning
// active:bg-warning";
// : "a";


$outlineClasses = ($outline ?? false)

@endphp

<button {{ $attributes->merge([
    'type' => $type,
    'class' => $classes . $outlineClasses . ' px-4 py-2 text-gray-50 text-sm border active:text-white hover:text-white
    transition
    duration-150
    ease-in-out inline-flex items-center m-1 focus:outline-none transition duration-150 ease-in-out rounded'
    ])
    }}>
    {{ $slot }}
</button>