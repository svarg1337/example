@props([
    'label',
    'name',
    'options',
    'selectedOption' => '3'
    ])

<div>
    <select name="{{ $name }}">
        @foreach ($options as $key => $option)
        <option value="{{ $key }}" @selected((string)$key === ($errors->any() ? (string)old($name) : (string)$selectedOption))>{{ $option }}</option>
        @endforeach
    </select> {{ $label }} {{ var_dump($selectedOption)}}
    @error($name)
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>


