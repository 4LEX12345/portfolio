@props(['value'])


<label {{ $attributes->class(['block ', 'font-medium text-gray-700 text-sm ' =>
    !$attributes->has('class') ]) }}>
    {{ $value ?? $slot }}
</label>