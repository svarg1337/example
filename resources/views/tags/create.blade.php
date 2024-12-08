<x-layout.main title="Создать тег">
    <x-form action="{{route('tags.store')}}">
    <x-form-input name="title" label="Название тега" />
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>
</x-layout.main>

