@props(['disabled' => false, 'field' => '', 'value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-second-color focus:ring-second-color rounded-md shadow-sm mt-6']) !!}>{{ $value }}</textarea>
@error($field)
    <div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
