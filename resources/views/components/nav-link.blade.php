@props(['active' => false])

<a {{ $attributes->merge([
    'class' => $active 
        ? 'font-bold text-teal-600 dark:text-teal-400' 
        : 'text-gray-500 dark:text-white hover:text-gray-500/75 dark:hover:text-white/75 transition']) }}>
    {{ $slot }}
</a>