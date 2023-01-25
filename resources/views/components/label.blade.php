@props(['value'])

<label {{ $attributes->merge(['class' => 'login-input-field font-medium text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
