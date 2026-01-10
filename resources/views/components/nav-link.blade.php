@props(['active' => '888'])

<a {{ $attributes }}>{{ $slot }} {{ $active }}</a>