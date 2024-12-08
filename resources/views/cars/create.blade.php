<x-layout.main title="Создать товар">
    <x-form action="{{route('cars.store')}}">
    @include('cars.form.fields')
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</x-layout.main>