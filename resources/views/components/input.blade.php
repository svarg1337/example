@props([
    'label',
    'name',
    'defaultValue' => '',
    ])

<div>
    <input name="{{ $name }}" value="{{ $errors->any() ? old($name) : $defaultValue }}"> {{ $label }}
    @error($name)
    <div style="color:red">{{ $message }}</div>
    @enderror
</div>