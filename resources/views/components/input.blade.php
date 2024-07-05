@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-Violet-500 focus:ring-Violet-500 rounded-md shadow-sm']) !!}>